<?php
include 'config.php';
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
}

$note = $_POST['note'];

 $company_order_id = $_POST['company_order_id'];

 foreach($company_order_id as $k => $company_order_id1){
	 $addnote1 = $note[$k];
	 $o_data = mysqli_query($conn,"select * from `order_data` where `id`='$company_order_id1'");
	 $data_o = mysqli_fetch_assoc($o_data);
	 $order_note = "<b>Order No. </b><br />".$data_o['sales_r_no']."<br />"."<b>Note. </b><br />".$addnote1;
	 mysqli_query($conn,"update `order_data` set `note`='$order_note' where `id`='$company_order_id1'");
 }
 
echo "<script>window.location='new.php'</script>";
?>