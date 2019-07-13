<?php
include 'config.php';
error_reporting(0);



$id = $_POST['id'];
$sku = $_POST['sku'];

mysqli_query($conn, "update `order_data` set `sku`= '".$sku."' where `id`='$id'"); 

