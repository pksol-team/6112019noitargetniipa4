<?php
include 'config.php';
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
}
$company_order_id = $_POST['company_order_id'];
$despatch = $_POST['despatch'];
foreach($company_order_id as $company_order_id1){
	mysqli_query($conn,"update `order_data` set `status`='$despatch' where `id`='$company_order_id1'");
	$data_order = mysqli_query($conn,"select * from `order_data` where `id`='$company_order_id1'");
	$order_data = mysqli_fetch_assoc($data_order);
	$order_no = $order_data['sales_r_no'];
	mysqli_query($conn,"update `order_data` set `status`='$despatch' where `sales_r_no`='$order_no' ");
}
echo "<script>window.location='c_order_view.php'</script>";
?>