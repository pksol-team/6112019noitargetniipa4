<?php 
include 'config.php';
session_start();
	if($_SESSION['password']=="")
	
	{
		echo "<script>window.location='login.php?msg=please login'</script>";
	}

$name=$_POST['name'];
$address_1=$_POST['address_1'];
$address_2=$_POST['address_2'];
$city=$_POST['city'];
$county=$_POST['county'];
$postalcode=$_POST['postalcode'];
$country=$_POST['country'];
$url=$_POST['url'];
$vat=$_POST['vat'];
$from=$_POST['from'];
$to=$_POST['to'];
mysqli_query($conn,"insert into `company` (`name`,`address_1`,`address_2`,`city`,`county`,`postalcode`,`country`,`url`,`vat`,`from`,`to`) values ('$name','$address_1','$address_2','$city','$county','$postalcode','$country','$url','$vat','$from','$to')");
$company_id = mysqli_insert_id($conn);
$channelname = $_POST['channelname'];
foreach($channelname as $channelname1){
	mysqli_query($conn,"insert into `company_data` (`company_id`,`channel_name`)values('$company_id','$channelname1')");
}

echo "<script>window.location='companyview.php'</script>";

?>