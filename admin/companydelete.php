<?php
 include 'config.php';

session_start();
	if($_SESSION['password']=="")
	
	{
		echo "<script>window.location='login.php?msg=please login'</script>";
	}
	
	$id = $_REQUEST['id'];
	
	mysqli_query($conn,"delete from `company` where id='$id' ");
	
	echo "<script>window.location='companyview.php'</script>";
	?>