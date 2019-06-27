<?php
include 'config.php';
error_reporting(0);



$id = $_POST['id'];
$courier = $_POST['courier'];

mysqli_query($conn, "update `order_data` set `assigned_courier`= '".$courier."' where `id`='$id'"); 

