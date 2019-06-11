<?php 
include 'config.php';
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
}
$status = $_POST['status'];
$company_order_id = $_POST['company_order_id'];
$date1 = date('Y-m-d');
foreach($company_order_id as $company_order_id1){
	mysqli_query($conn,"update `order_data` set `status`='$status' where `id`='$company_order_id1'");
	$data_order = mysqli_query($conn,"select * from `order_data` where `id`='$company_order_id1'");
	$order_data = mysqli_fetch_assoc($data_order);
	$order_no = $order_data['sales_r_no'];
	$company_id = $order_data['company_id'];
	$sale_date = $order_data['sale_date'];
	if($status=="shipped" or $status=="Shipped" ){
	mysqli_query($conn,"update `order_data` set `status`='$status',`dispatch_date`='".$date1."' where `sales_r_no`='$order_no' and `company_id`='$company_id' and `sale_date`='$sale_date' ");
	}else{
	mysqli_query($conn,"update `order_data` set `status`='$status' where `sales_r_no`='$order_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
	}
	
	
	$set_old = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$order_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
	while($data_old = mysqli_fetch_assoc($set_old)){
		$old_s_r_n = $data_old['old_sales_r_no'];
		if($status=="shipped" or $status=="Shipped" ){
		if(!empty($old_s_r_n)){
			mysqli_query($conn,"update `order_data` set `status`='$status',`dispatch_date`='".$date1."' where `sales_r_no`='$old_s_r_n' and `company_id`='$company_id' and `sale_date`='$sale_date'");
		}	
		}else{
		
		if(!empty($old_s_r_n)){
			mysqli_query($conn,"update `order_data` set `status`='$status'  where `sales_r_no`='$old_s_r_n' and `company_id`='$company_id' and `sale_date`='$sale_date'");
		}
		}
	}
	
}
if($status=="shipped" or $status=="Shipped" ){
echo "<script>window.location='dispatch.php'</script>";	
}else{
echo "<script>window.location='c_order_view.php'</script>";
}
?>