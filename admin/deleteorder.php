<?php 
include 'config.php';
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
}

 $company_order_id = $_POST['company_order_id'];

foreach($company_order_id as $company_order_id1){
	//echo $company_order_id1;
	
	$getdata = mysqli_query($conn,"select * from `order_data` where `id`='$company_order_id1'");
	$dataget = mysqli_fetch_assoc($getdata);
	 $sales_r_no = $dataget['sales_r_no'];
	 $sale_date = $dataget['sale_date'];
	 $company_id = $dataget['company_id'];
	$rerdata = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$sales_r_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
	while($datarer = mysqli_fetch_assoc($rerdata)){
		echo $old_sales_r_no=$datarer['old_sales_r_no'];
		if(!empty($old_sales_r_no)){
		mysqli_query($conn,"delete from `order_data` where `sales_r_no`='$old_sales_r_no'");
	}
	
	
	}
	if(!empty($sales_r_no)){
		mysqli_query($conn,"delete from `order_data` where `sales_r_no`='$sales_r_no' and `company_id`='$company_id' and `sale_date`='$sale_date'");
	}
	
}
if($_GET['status']=='despatch'){
	echo "<script>window.location='dispatch.php'</script>";
}elseif($_GET['status']=='inprogress'){
	echo "<script>window.location='c_order_view.php#tab_1_2'</script>";
}else{
	echo "<script>window.location='c_order_view.php#tab_1_1'</script>";
}

?>