<?php
include 'config.php'; 
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
}
$order_id = $_POST['order_id'];
$user_name = $_POST['user_name'];
	mysqli_query($conn,"update `order_data` set `user`='$user_name' where `id`='$order_id'");

echo "<script>window.location='new.php'</script>";
?>