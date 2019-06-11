<?php 
include 'config.php';
$password = $_POST['password'];

$data = mysqli_query ($conn,"select * from `login` where `password` ='$password'");
if(mysqli_fetch_assoc($data))
	{
		session_start();
		
		$_SESSION['password']=$password;
		
		echo "<script>window.location='index.php'</script>";
	}
	else
	{
		echo "<script>window.location='login.php?msg = password is wrong'; alert('password worng.');</script>";
	}
?>