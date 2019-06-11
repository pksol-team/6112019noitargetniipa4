<?php
error_reporting(0);
include 'config.php';
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php';</script>";
}
$company_order_id = $_POST['company_order_id'];
$breack = array(11,21,31,41,51,61,71,81,91, 101,111,121,131,141,151,161,171,181,191,201,211,221,231,241,251,261,271,281,291,301,311,321,331,341,351,361,371,381,391,401,411,421,431,441,451,461,471,481,491,501,511,521,531,541,551,561,571,581,591,601,611,621,631,641,651,661,671,681,691,701,711,721,731,741,751,761,771,781,791,801,811,821,831,841,851,861,871,881,891,901,911,921,931,941,951,961,971,981,991,1001,1011,1021,1031,1041,1051,1061,1071,1081,1091,1101,1111,1121,1131,1141,1151,1161,1171,1181,1191,1201,1211,1221,1231,1241,1251,1261,1271,1281,1291,1301,1311,1321,1331,1341,1351,1361,1371,1381,1391,1401,1411,1421,1431,1441,1451,1461,1471,1481,1491,1501,1511,1521,1531,1541,1551,1561,1571,1581,1591,1601,1611,1621,1631,1641,1651,1661,1671,1681,1691,1701,1711,1721,1731,1741,1751,1761,1771,1781,1791,1801,1811,1821,1831,1841,1851,1861,1871,1881,1891,1901,2001,2011,2021,2031,2041,2051,2061,2071,2081,2091);
?>
<html><head>
		<meta charset="utf-8">
		<title>10 Per Sheet</title>
		<link rel="stylesheet" href="style1.css">
		
	</head>
	<body cz-shortcut-listen="true"  >
			<div class="fix"><center>
			<div style="height:6mm;  width:21cm;"></div>
			<div class="main">
			<?php
			$i =0;
								foreach($company_order_id as $company_order_id1){
								$order_data = mysqli_query($conn,"select * from `order_data` where `id`='$company_order_id1'");
								$data_order = mysqli_fetch_assoc($order_data);
								$order_no = mysqli_real_escape_string($conn,$data_order['sales_r_no']);
								$company_id = mysqli_real_escape_string($conn,$data_order['company_id']);
								$sale_date = mysqli_real_escape_string($conn,$data_order['sale_date']);
								$buyer_address_1 = mysqli_real_escape_string($conn,$data_order['buyer_address_1']);
								$buyer_address_2 = mysqli_real_escape_string($conn,$data_order['buyer_address_2']);
								$status = mysqli_real_escape_string($conn,$data_order['status']);
								
								$address=null;
								if(!empty($data_order['buyer_name'])){
$address .='<b style="font-size:13px;">'.ucfirst($data_order['buyer_name']).'</b><br>';	
}
if(!empty($data_order['buyer_address_1'])){
$address .=''. mysqli_real_escape_string($conn,$data_order['buyer_address_1']).'<br>';	
}
if(!empty($data_order['buyer_address_2'])){
$address .=''. mysqli_real_escape_string($conn,$data_order['buyer_address_2']).'<br>';	
}
if(!empty($data_order['buyer_town'])){
$address .=''. mysqli_real_escape_string($conn,$data_order['buyer_town']).'';	
}
if(!empty($data_order['buyer_county'])){
$address .=' , '. mysqli_real_escape_string($conn,$data_order['buyer_county']).'<br>';	
}else{
	$address .='<br>';
}
if(!empty($data_order['buyer_postcode'])){
$address .=''.strtoupper(mysqli_real_escape_string($conn,$data_order['buyer_postcode'])).'<br>';	
}

								
								
								$datacompany = mysqli_query($conn,"select * from `company` where `id`='$company_id'");
									$companydata = mysqli_fetch_assoc($datacompany);
									if(!empty($companydata['url'])){
$companyaddress .=''.mysqli_real_escape_string($conn,$companydata['url']).'<br>';	
}
									if(!empty($companydata['address_1'])){
$companyaddress .=''.mysqli_real_escape_string($conn,$companydata['address_1']).', ';	
}
if(!empty($companydata['address_2'])){
$companyaddress .=''.mysqli_real_escape_string($conn,$companydata['address_2']).', ';	
}
if(!empty($companydata['city'])){
$companyaddress .=''.mysqli_real_escape_string($conn,$companydata['city']).' - ';	
}

if(!empty($companydata['postalcode'])){
$companyaddress .=''.mysqli_real_escape_string($conn,$companydata['postalcode']);	
}


									$companyname = mysqli_real_escape_string($conn,$companydata['name']);
									$i++;
								?>
								<?php
								
								$order_id_data = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$order_no' and `company_id`='$company_id' and `status`='$status' and `sale_date`='$sale_date'");
								while($data_id_order = mysqli_fetch_assoc($order_id_data)){
									$order_no2 = $data_id_order['sales_r_no'];
									if(empty($data_id_order['sku'])){
										
									}else{
									$skus[] = $data_id_order['sku']."("." ".$data_id_order['quantity']." ".")";
									}
								} 
								
								?>
	<?php 

	if(in_array($i,$breack)){
			?>
			
			
			<div class="cccc" style="width:100%; float:left; height:6mm;  background-color:white; page-break-after:always;"></div>
			<div style="width:100%; float:left; display:block; height:6mm; background-color:white;">&nbsp;</div>
				<?php } ?>
			<div class="block">
			<div class="address1">
			<div style="height:3mm; width:100%; display:block;"></div>
			<div class="add">
			<?php  echo "<text style='    font-size: 14px;width: 259px;text-align: left;display: block;height: 110px;word-wrap: break-word;'>"."".$address."</text>"; ?>
			<text style="width: 266px;text-align:left; z-index: 1000; backgroung-color: white; opcity: 1; display: block; height: 56px;overflow-wrap: break-word;"><b style="font-size:13px;"></b><text style="font-weight:600; font-size:13px;"><?php echo implode(' // ',$skus); $skus=null;?></text><b  style="font-size:13px;"></b></text>
			</div>
			<div class="img">
			<img src="ppi.jpg" style="width:21mm; height:39mm;" style="float:right;">
			</div>
			
			</div>
			<!-- company address-->
			<div class="address2">
			<text style="height: 100%;width: 100%; text-align:right; float:right; font-size:12px;letter-spacing: 0em;"><?php echo $companyaddress; $companyaddress = null; ?></text>
			</div>
			</div>
			
			<div style="display:block; width:4mm; height:56mm; position:relative; float:left;"></div>
			
								<?php } ?>
			
			
			</div>
						
			
			</div>
	</center>
</body></html>