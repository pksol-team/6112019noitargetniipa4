 <?php
include("config.php");

session_start();
	if($_SESSION['password']=="")
	
	{
		echo "<script>window.location='login.php?msg=please login'</script>";
	}	


$company=$_GET['id'];

?>

<div id="std_div">				  
<select placeholder="product" class="m-wrap small validate[required] text-input" name="product[]" id="std_div" >
<?php 
$ddd = mysqli_query($conn,"select * from product where companyname = '$company'");
while($data_betch1 = mysqli_fetch_assoc($ddd))	
	 {						
						         $bid1=$data_betch1['id'];		
						         $betch1=$data_betch1['productname'];
						         $betch12=$data_betch1['productprice'];
						  
?>
<option value="<?php echo $betch1; ?>"><?php echo $betch1; ?></option></select>
</div>

