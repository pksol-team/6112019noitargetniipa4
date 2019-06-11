<?php include 'config.php';
session_start();
	if($_SESSION['password']=="")
	
	{
		echo "<script>window.location='login.php?msg=please login'</script>";
	}
$uid=$_REQUEST['uid'];


$uname=$_POST['uname'];
$password=$_POST['password'];
$email=$_POST['email'];
$text=$_POST['text'];




mysqli_query($conn,"update user set uname='$uname',password='$password',email='$email',text='$text' where uid='$uid' ");
echo "<script>window.location='userview.php'</script>";

?>