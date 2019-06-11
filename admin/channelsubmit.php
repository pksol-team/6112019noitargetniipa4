<?php 
include 'config.php';
session_start();
	if($_SESSION['password']=="")
	
	{
		echo "<script>window.location='login.php?msg=please login'</script>";
	}

$name=$_POST['name'];
$image=$_FILES['image']['name'];
 $file_tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$image);

mysqli_query($conn,"insert into `channel` (`name`,`file`) values ('$name','$image')");
echo "<script>window.location='channelview.php'</script>";

?>