<?php 
include 'config.php';
session_start();
	if($_SESSION['password']=="")
	
	{
		echo "<script>window.location='login.php?msg=please login'</script>";
	}


$password=$_POST['password'];




mysqli_query($conn,"update `login` set `password`='$password' where `id`='1'");
echo "<script>window.location='setting.php'</script>";

?>