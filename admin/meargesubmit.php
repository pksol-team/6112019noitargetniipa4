<?php
include 'config.php';
session_start();


if(!isset($_GET['type']) && $_GET['type'] != 'curl') {

	if($_SESSION['password']==''){
		echo "<script>window.location='login.php'</script>";	
	}

}


$company_order_id = $_POST['company_order_id']; //first orderid data

$company_first_id = $company_order_id[0];


$status = $_GET['status'];//shipped inprogress new
$data_first_order=mysqli_query($conn,"select * from `order_data` where `id`='$company_first_id'");

$order_first_data = mysqli_fetch_assoc($data_first_order);



$order_no = mysqli_real_escape_string($conn,$order_first_data['sales_r_no']);
$sku_first_order = mysqli_real_escape_string($conn,$order_first_data['sku']);
$item_title_first_order = mysqli_real_escape_string($conn,$order_first_data['item_title']);
$item_no_first_order = mysqli_real_escape_string($conn,$order_first_data['item_no']);
$buyer_name_first_order = mysqli_real_escape_string($conn,$order_first_data['buyer_name']); 
$quantity_first_order = mysqli_real_escape_string($conn,$order_first_data['quantity']);
$sale_price_first_order = mysqli_real_escape_string($conn,$order_first_data['sale_price']);
$shipping_cost_first_order = mysqli_real_escape_string($conn,$order_first_data['shipping_cost']);
$postage_packing_first_order = mysqli_real_escape_string($conn,$order_first_data['postage_packing']);
$company_id_first_order = mysqli_real_escape_string($conn,$order_first_data['company_id']);
$channel_id_first_order = mysqli_real_escape_string($conn,$order_first_data['channel_id']);
$sale_date_first_order = mysqli_real_escape_string($conn,$order_first_data['sale_date']);
$st = mysqli_real_escape_string($conn,$order_first_data['status']);


if(!empty($buyer_name_first_order) and !empty($sku_first_order) and !empty($item_no_first_order) and !empty($item_title_first_order)){
	
	mysqli_query($conn,"insert into `order_data` 
		(`company_id`,`channel_id`,`sales_r_no`,
		`item_no`,`item_title`,`quantity`,`sku`,
		`status`,`mearge`,`sale_price`,`shipping_cost`,
		`postage_packing`,`sale_date`)
		values('$company_id_first_order','$channel_id_first_order',
		'$order_no','$item_no_first_order','$item_title_first_order',
		'$quantity_first_order','$sku_first_order','$status','mearged',
		'$sale_price_first_order','$shipping_cost_first_order',
		'$postage_packing_first_order','$sale_date_first_order')");

	mysqli_query($conn,"update `order_data` set  `postage_packing`='',
		`sale_price`='',`sku`='',`item_no`='',`shipping_cost`='',
		`item_title`='',`quantity`='',`status`='$status',`mearge`='mearged',
		`total_price`='',`sale_date`='$sale_date_first_order',
		`company_id`='$company_id_first_order',
		`channel_id`='$channel_id_first_order' where `id`='$company_first_id'");
}


	mysqli_query($conn,"update `order_data` set `quantity`='',
		`mearge`='mearged' where `id`='$company_first_id' ");
	mysqli_query($conn,"update `order_data` set `mearge`='mearged' 
		where `sales_r_no`='$order_no' and `company_id`='$company_id_first_order'");
//end
$company_ids = array_slice($company_order_id,1);
foreach($company_ids as $company_order_id1){
	//start all orderdata
	$order_data = mysqli_query($conn,"select * from `order_data` where `id`='$company_order_id1'");
	$data_order = mysqli_fetch_assoc($order_data);
	
	$order_no_m = mysqli_real_escape_string($conn,$data_order['sales_r_no']);
	$mearge_m = mysqli_real_escape_string($conn,$data_order['mearge']);
	$company_id_m = mysqli_real_escape_string($conn,$data_order['company_id']);
	$sale_date_m = mysqli_real_escape_string($conn,$data_order['sale_date']);
	$fetching_order_filter=mysqli_query($conn,"select * from `order_data` where `sales_r_no` ='$order_no_m' and `company_id`='$company_id_m' and `sale_date`='$sale_date_m'");
	while($fetching_order_filter1 = mysqli_fetch_Assoc($fetching_order_filter)){
		
	$id_fetched_order = mysqli_real_escape_string($conn,$fetching_order_filter1['id']);
	$sku_m = mysqli_real_escape_string($conn,$fetching_order_filter1['sku']);
	$item_title_m = mysqli_real_escape_string($conn,$fetching_order_filter1['item_title']);
	$item_no_m = mysqli_real_escape_string($conn,$fetching_order_filter1['item_no']);
	$quantity_m = mysqli_real_escape_string($conn,$fetching_order_filter1['quantity']);
	$sale_price_m = mysqli_real_escape_string($conn,$fetching_order_filter1['sale_price']);
	$buyer_name_m = mysqli_real_escape_string($conn,$fetching_order_filter1['buyer_name']);
	$sales_r_no_m = mysqli_real_escape_string($conn,$fetching_order_filter1['sales_r_no']);
	$shipping_cost_m = mysqli_real_escape_string($conn,$fetching_order_filter1['shipping_cost']);
	$postage_packing_m = mysqli_real_escape_string($conn,$fetching_order_filter1['postage_packing']);
	//$company_id_m = mysqli_real_escape_string($conn,$fetching_order_filter1['company_id']);
	$channel_id_m = mysqli_real_escape_string($conn,$fetching_order_filter1['channel_id']);
	$old_sales_r_no_m = mysqli_real_escape_string($conn,$fetching_order_filter1['old_sales_r_no']);
	if($order_no==$sales_r_no_m){
		
	}else{
	//end
	if(empty($old_sales_r_no_m)){
		if(!empty($item_title_m) and !empty($item_no_m) and !empty($sku_m) and !empty($buyer_name_m)){
		mysqli_query($conn,"insert into `order_data` (`company_id`,`channel_id`,`old_company_id`,`old_channel_id`,`sales_r_no`,`old_sales_r_no`,`item_no`,`item_title`,`sku`,`quantity`,`mearge`,`status`,`sale_price`,`shipping_cost`,`postage_packing`,`sale_date`)values('$company_id_first_order','$channel_id_first_order','$company_id_m','$channel_id_m','$order_no','$order_no_m','$item_no_m','$item_title_m','$sku_m','$quantity_m','mearged','$status','$sale_price_m','$shipping_cost_m','$postage_packing_m','$sale_date_first_order')");
		
		
		mysqli_query($conn,"update `order_data` set `postage_packing`='',`mearge`='hide',`sku`='',`shipping_cost`='', `sale_price`='',`item_no`='',`item_title`='',`quantity`='',`total_price`='' where `id`='$id_fetched_order'");
		
		
	}
	//empty but old mearged order rer orders
	if(empty($item_title_m) and empty($item_no_m) and empty($sku_m) and !empty($buyer_name_m)){
		mysqli_query($conn,"update `order_data` set `postage_packing`='',`mearge`='hide' ,`sale_price`='',`quantity`='',`shipping_cost`='' where `id`='$id_fetched_order'");
	}
	if(!empty($item_title_m) and !empty($item_no_m) and !empty($sku_m) and empty($buyer_name_m)){
		mysqli_query($conn,"update `order_data` set `company_id`='$company_id_first_order',`channel_id`='$channel_id_first_order',`old_company_id`='$company_id_m',`old_channel_id`='$channel_id_m',`postage_packing`='$postage_packing_m',`sales_r_no`='$order_no' ,`shipping_cost`='$shipping_cost_m',`old_sales_r_no`='$order_no_m',`sale_Date`='$sale_date_first_order', `mearge`='mearged',`status`='$status' where `id`='$id_fetched_order'");
	}
	}else{
	//not empty (item_title,item_name,sku,buyername) //not mearged order
	if(!empty($item_title_m) and !empty($item_no_m) and !empty($sku_m) and !empty($buyer_name_m)){
		mysqli_query($conn,"insert into `order_data` (`company_id`,`channel_id`,`old_company_id`,`old_channel_id`,`sales_r_no`,`item_no`,`item_title`,`sku`,`quantity`,`mearge`,`status`,`sale_price`,`shipping_cost`,`postage_packing`,`sale_date`)values('$company_id_first_order','$channel_id_first_order','$company_id_m','$channel_id_m','$order_no','$item_no_m','$item_title_m','$sku_m','$quantity_m','mearged','$status','$sale_price_m','$shipping_cost_m','$postage_packing_m','$sale_date_first_order')");
		
		
		mysqli_query($conn,"update `order_data` set `postage_packing`='',`mearge`='hide',`sku`='',`shipping_cost`='', `sale_price`='',`item_no`='',`item_title`='',`quantity`='',`total_price`='' where `id`='$id_fetched_order'");
		
		
	}
	//empty but old mearged order rer orders
	if(empty($item_title_m) and empty($item_no_m) and empty($sku_m) and !empty($buyer_name_m)){
		mysqli_query($conn,"update `order_data` set `postage_packing`='',`mearge`='hide' ,`sale_price`='',`quantity`='',`shipping_cost`='' where `id`='$id_fetched_order'");
	}
	if(!empty($item_title_m) and !empty($item_no_m) and !empty($sku_m) and empty($buyer_name_m)){
		mysqli_query($conn,"update `order_data` set `company_id`='$company_id_first_order',`channel_id`='$channel_id_first_order',`old_company_id`='$company_id_m',`old_channel_id`='$channel_id_m',`postage_packing`='$postage_packing_m',`sales_r_no`='$order_no' ,`shipping_cost`='$shipping_cost_m',`sale_Date`='$sale_date_first_order', `mearge`='mearged',`status`='$status' where `id`='$id_fetched_order'");
	}
	
	}
	}
	}
	
	
}

if(!isset($_GET['type']) && $_GET['type'] != 'curl') {

	if($st=='shipped' or $st=='Shipped'){
		echo "<script>window.location='dispatch.php'</script>";
	} else {
		echo "<script>window.location='c_order_view.php'</script>";
	}

}

?>