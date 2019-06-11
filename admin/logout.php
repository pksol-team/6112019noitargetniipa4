<?php 
include 'config.php';
session_start(); 
$id=$_SESSION['id']; 
if($_SESSION['username']=="" AND $_SESSION['password']=="")
{ 
echo "<script>window.location='login.php?msg=please login'</script>"; 
} 
$msg="";

session_destroy();
echo "<script>window.location='login.php?msg=logout sucessfully'</script>";

?>
	
	
	
	
	

