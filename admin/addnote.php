<?php
include 'config.php'; 
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
}

$order_id = $_POST['order_id'];
$note = $_POST['note'];
	mysqli_query($conn,"update `order_data` set `note`='$note' where `id`='$order_id'");

echo "<script>window.location='new.php'</script>";
?>