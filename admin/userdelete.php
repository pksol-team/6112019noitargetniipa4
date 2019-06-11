<?php include 'config.php';
session_start();
	if($_SESSION['password']=="")
	
	{
		echo "<script>window.location='login.php?msg=please login'</script>";
	}
	$uid = $_REQUEST['uid'];
	mysqli_query($conn,"delete from  user where uid='$uid' ");
	echo "<script>window.location='userview.php'</script>";
	?>