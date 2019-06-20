<?php
include 'config.php';
session_start();

if(!isset($_GET['type']) && $_GET['type'] != 'curl') {
	echo "<script>window.location='login.php'</script>";
}

$company_order_id = $_POST['company_order_id'];


foreach($company_order_id as $company_order_id1){
	//get data from First Order
	$data = mysqli_query($conn,"select * from `order_data` where `id`='$company_order_id1'");
	$data_got= mysqli_fetch_assoc($data);
	 $order_no = $data_got['sales_r_no'];
	 $company_id = $data_got['company_id'];
	 $sale_date = $data_got['sale_date'];
	 $st = $data_got['status'];
	
	$merge_data = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$order_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
	while($data_merge = mysqli_fetch_assoc($merge_data)){
		$actual_order_no = $data_merge['old_sales_r_no'];
		if(!empty($actual_order_no)){
			$datacount = mysqli_query($conn,"select * from `order_data` where `old_sales_r_no`='$actual_order_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
			$countdata = mysqli_num_rows($datacount);
			if($countdata<2){
			mysqli_query($conn,"update `order_data` set `sales_r_no`='$actual_order_no' where `old_sales_r_no`='$actual_order_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
			
			mysqli_query($conn,"update `order_data` set `mearge`='' where `sales_r_no`='$actual_order_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
			}else{
				mysqli_query($conn,"update `order_data` set `sales_r_no`='$actual_order_no' where `old_sales_r_no`='$actual_order_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
			
			mysqli_query($conn,"update `order_data` set `mearge`='mearged' where `sales_r_no`='$actual_order_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
			}
			
		}
	}
	 $datacount1 = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$order_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
			$countdata1 = mysqli_num_rows($datacount1);
			if($countdata1>2){
	 mysqli_query($conn,"update `order_data` set `mearge`='mearged' where `sales_r_no`='$order_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
			}else{
		mysqli_query($conn,"update `order_data` set `mearge`='' where `sales_r_no`='$order_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
			}
}


if(!isset($_GET['type']) && $_GET['type'] != 'curl') {

	if($st=='shipped' or $st=='Shipped') {
		echo "<script>window.location='dispatch.php'</script>";
	} else {
		echo "<script>window.location='c_order_view.php'</script>";
	}

}


?>