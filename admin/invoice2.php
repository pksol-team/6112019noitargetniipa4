<?php
error_reporting(0);
include 'config.php';
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php';</script>";
}
$company_order_id = $_POST['company_order_id'];
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
								foreach($company_order_id as $company_order_id1){
								$order_data = mysqli_query($conn,"select * from `order_data` where `id`='$company_order_id1'");
								$data_order = mysqli_fetch_assoc($order_data);
								$order_no = $data_order['sales_r_no'];
								$company_id = $data_order['company_id'];
								$buyer_address_1 = $data_order['buyer_address_1'];
								$buyer_address_2 = $data_order['buyer_address_2'];
								
								$address=null;
								if(!empty($data_order['buyer_name'])){
$address .='<b style="font-size:13px;">'.ucfirst($data_order['buyer_name']).'</b><br>';	
}
if(!empty($data_order['buyer_address_1'])){
$address .=''.$data_order['buyer_address_1'].'<br>';	
}
if(!empty($data_order['buyer_address_2'])){
$address .=''.$data_order['buyer_address_2'].'<br>';	
}
if(!empty($data_order['buyer_town'])){
$address .=''.$data_order['buyer_town'].'';	
}
if(!empty($data_order['buyer_county'])){
$address .=' , '.$data_order['buyer_county'].'<br>';	
}else{
	$address .='<br>';
}
if(!empty($data_order['buyer_postcode'])){
$address .=''.strtoupper($data_order['buyer_postcode']).'<br>';	
}

								
								
								$datacompany = mysqli_query($conn,"select * from `company` where `id`='$company_id'");
									$companydata = mysqli_fetch_assoc($datacompany);
									if(!empty($companydata['url'])){
$companyaddress .=''.$companydata['url'].'<br>';	
}
									if(!empty($companydata['address_1'])){
$companyaddress .=''.$companydata['address_1'].', ';	
}
if(!empty($companydata['address_2'])){
$companyaddress .=''.$companydata['address_2'].', ';	
}
if(!empty($companydata['city'])){
$companyaddress .=''.$companydata['city'].' - ';	
}

if(!empty($companydata['postalcode'])){
$companyaddress .=''.$companydata['postalcode'];	
}


									$companyname = $companydata['name'];
								?>
								<?php
								
								$order_id_data = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$order_no'");
								while($data_id_order = mysqli_fetch_assoc($order_id_data)){
									$order_no2 = $data_id_order['sales_r_no'];
									if(empty($data_id_order['sku'])){
										
									}else{
									$skus[] = $data_id_order['sku'];
									}
								} 
								
								?>
			<div class="block">
			<div class="address1">
			<div style="height:3mm; width:100%; display:block;"></div>
			<div class="add">
			<?php  echo "<text style='    font-size: 14px;width: 259px;text-align: left;display: block;height: 110px;word-wrap: break-word;'>"."".$address."</text>"; ?>
			<text style="width: 266px;text-align:left; z-index: 1000; backgroung-color: white; opcity: 1; display: block; height: 56px;overflow-wrap: break-word;"><b style="font-size:13px;">SKU:(</b><text style="font-weight:600; font-size:13px;"><?php echo implode(' // ',$skus); $skus=null;?></text><b  style="font-size:13px;">)</b></text>
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
			
			<div style="display:block; width:4mm; height:57.2mm; position:relative; float:left;"></div>
			
			
								<?php } ?>
			
			
			</div>
			<div style="height:6mm; width:21cm;"></div>
			</div>
	</center>
</body></html>