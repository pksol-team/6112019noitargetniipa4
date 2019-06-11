<?php include 'config.php';

session_start();

	if($_SESSION['password']=="")
	
	{
		echo "<script>window.location='login.php?msg=please login'</script>";
	}
	
$id=$_REQUEST['id'];

$name=$_POST['name'];
$image=$_FILES['image']['name'];
$file_tmp = $_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$image);

if($image==''){
mysqli_query($conn,"update `channel` set `name`='$name' where `id`='$id' ");	
}else{
mysqli_query($conn,"update `channel` set `name`='$name',`file`='$image' where `id`='$id' ");
}
echo "<script>window.location='channelview.php'</script>";

?>