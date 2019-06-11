<?php include 'config.php';

session_start();

	if($_SESSION['password']=="")
	
	{
		echo "<script>window.location='login.php?msg=please login'</script>";
	}
	
$id=$_REQUEST['id'];


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
mysqli_query($conn,"update `company` set `name`='$name',`address_1`='$address_1',`address_2`='$address_2',`city`='$city',`county`='$county',`postalcode`='$postalcode',`country`='$country',`url`='$url',`vat`='$vat',`from`='$from',`to`='$to' where `id`='$id'");

mysqli_query($conn,"delete from `company_data`  where `company_id`='$id'");
$channelname = $_POST['channelname'];
foreach($channelname as $channelname1){
	mysqli_query($conn,"insert into `company_data` (`company_id`,`channel_name`)values('$id','$channelname1')");
}

echo "<script>window.location='companyview.php'</script>";

?>