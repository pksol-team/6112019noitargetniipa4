<!DOCTYPE html>
<?php
include 'config.php';
error_reporting(0);
session_start();
if($_SESSION['password']==''){
echo "<script>window.location='login.php'</script>";
}


?>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" id="" >
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
<meta charset="utf-8" />
<?php include 'title.php';?>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<link href="../assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="../assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="../assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="../assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="../assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME LAYOUT STYLES -->
<link rel="shortcut icon" href="favicon.ico" /> </head>
<!-- END HEAD -->
<?php include 'popups.php';?>
<body class="page-container-bg-solid page-md" style="font-size: 12px;">
<!-- BEGIN HEADER -->
<link href="custom.css" rel="stylesheet" type="text/css" />
<div class="page-header">
<!-- BEGIN HEADER TOP -->
<div class="page-header-top">
<div class="container-fluid">
<!-- BEGIN LOGO -->
<div class="page-logo">
<a href="index.html">
<img src="../assets/layouts/layout3/img/logo-default.jpg" alt="logo" class="logo-default">
</a>
</div>
<!-- END LOGO -->
<!-- BEGIN RESPONSIVE MENU TOGGLER -->
<a href="javascript:;" class="menu-toggler"></a>
<!-- END RESPONSIVE MENU TOGGLER -->
<!-- BEGIN TOP NAVIGATION MENU -->
<?php include 'top.php' ?>
<!-- END TOP NAVIGATION MENU -->
</div>
</div>
<!-- END HEADER TOP -->
<!-- BEGIN HEADER MENU -->
<?php include 'menu.php';?>
<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container">

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
<!-- BEGIN CONTENT BODY -->
<!-- BEGIN PAGE HEAD-->
<div class="page-head">
<div class="container-fluid">
<!-- BEGIN PAGE TITLE -->
<div class="page-title">
<h1>Order Datatables
<small>Order datatable </small>
</h1>
</div>
<!-- END PAGE TITLE -->
<!-- BEGIN PAGE TOOLBAR -->

<!-- END PAGE TOOLBAR -->


</div>
</div>
<!-- END PAGE HEAD-->
<!-- BEGIN PAGE CONTENT BODY -->
<div class="page-content">
<div class="container-fluid" id="containerfluid">
<!-- BEGIN PAGE BREADCRUMBS -->
<?php //include 'siteurl.php';?>
<!-- END PAGE BREADCRUMBS -->
<!-- BEGIN PAGE CONTENT INNER 
<div class="row">
<div class="col-md-12">
<div class="portlet light">
dfsd
</div>
</div>
</div>-->
<div class="page-content-inner">

<div class="row">
<div class="col-md-12">
<div class="portlet light">
<ul class="nav nav-tabs">
<li class="active" >
<a href="#tab_1_1" data-toggle="tab"><b> New </b></a>
</li>
<li>
<a href="#tab_1_2" data-toggle="tab"> <b>In Progress </b></a>
</li>
<!-- <li>
<a href="#tab_1_3" data-toggle="tab"> <b>Merged Orders </b></a>
</li> -->


</ul>
<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="tab-content">
<div class="tab-pane fade active in" id="tab_1_1">
<div class="table-toolbar">
<div class="row">


<div class="row col-md-8 ">

<div class="pull-left ">
<div class="btn-group">
<select  style="font-size:12px;" class="form-control custom-select" id="print_type" onchange="FormStuff();">
<option hidden value="select">Tools</option>
<option value="flag">Add Flag</option>



<option value="returnsform">Returns Form</option>
<option value="status">Change Status</option>



</select>
</div>
<div class="btn-group">
<button type="button"  style="font-size:9.1px;" id="sample_editable_1_new" onclick="document.getElementById('form1').submit()" class="btn sbold green"> OK

</button>
</div>
<div class="btn-group">
<button type="button"  style="font-size:9.1px;" onclick="ImportForm();" id="sample_editable_1_new" class="btn grey-cascade">Import</button> 
</div> 
<div class="btn-group"><button style="font-size:9.1px;" onclick="Export();" id="sample_editable_1_new" class="btn sbold blue"> Export</button></div>
<div class="btn-group"><button onclick="InvoiceNew();" style="font-size:9.1px;" id="sample_editable_1_new" type="button"  class="btn green-meadow"> Invoice</button></div>
<div class="btn-group"><button style="font-size:9.1px;" onclick="mearge_new();" id="sample_editable_1_new" class="btn purple-plum"> Merge</button></div>
<div class="btn-group"><button style="font-size:9.1px;" onclick="UnmergeNew();" id="sample_editable_1_new" class="btn blue-hoki"> UnMerge</button></div>
<div class="btn-group"><button style="font-size:9.1px;" onclick="Dispatch1();" id="sample_editable_1_new" class="btn grey-mint">Mail</button></div>
<div class="btn-group"><button style="font-size:9.1px;" onclick="ReceiptNew();" id="sample_editable_1_new" class="btn btn-warning">10 Per Sheet</button></div>
<div class="btn-group"><button style="font-size:9.1px;" onclick="JobSheetNew();" id="sample_editable_1_new" class="btn red">Packing List</button></div>
<div class="btn-group"><button style="font-size:9.1px;" onclick="PackingListNew();" id="sample_editable_1_new" class="btn blue">Picking List</button></div>

<div class="btn-group ">
<select  style="font-size:12px;"  class="form-control fltr" name="filter_name" id="filter_name" onchange="run(this.value);">
<option>Filter</option>
<option value="shipping">Shipping</option>
<option value="price">Price</option>
<option value="sku">SKU</option>
</select>


</div>
<div class="btn-group "><button  style="font-size:9.1px;" onclick="delete_new_order();" id="sample_editable_1_new" class="btn sbold red"> Delete

</button></div>
<div class="btn-group "><a href="c_order_view.php#tab_1_1"><button  style="font-size:9.1px;" id="sample_editable_1_new" class="btn grey-mint"> Refresh

</button></a></div>
</div>
</div>

</div>
</div>
<script>

</script>
<form  method="post" id="form1" name="print" action="/">
<div id="selectstatus"></div>
<table style="font-size: 12px;" class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
<thead  style="font-size: 12px;">
<tr>
<th>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
<span></span>
</label>
</th>  

<th style="font-size:12px;">Logo</th>
<th style="font-size:12px;">order Id</th>
<th style="font-size:12px;">Date</th>
<th style="font-size:12px;">Customer</th>
<th style="font-size:12px;">PostCode</th>
<th style="font-size:12px;">SKU</th>
<th style="font-size:12px;">QTY</th>
<th style="font-size:12px;">Shipping</th>
<th style="font-size:12px;">Total</th>
<th style="font-size: 12px; width: 20px;"><div class="">Status</div></th>

<th style="font-size:12px;"><div class="statuss">-</div></th>



</tr>
</thead>
<tbody>
<?php
$sn=0;


$from = $_GET['from'];
$to = $_GET['to'];
$skuword = $_GET['skuword'];
$shippingword = $_GET['shippingword'];

if(!empty($from) or !empty($to)){
	
	//$sql_0111=mysqli_query($conn,"SELECT  *,SUM((sale_price*quantity) + postage_packing) as tot FROM `order_data` GROUP BY sales_r_no having status='shipped' and tot >=".$from_despatch." and tot<=".$to_despatch." order by `id` DESC");
	
$sql_011=mysqli_query($conn,"SELECT  *,SUM((sale_price*quantity) + postage_packing) as tot FROM `order_data` GROUP BY `company_id`,`sales_r_no`,`sale_date` having status='new' and not  `mearge`='hide'  and tot >=".$from." and tot<=".$to." order by `id` DESC");

//echo "<script>alert();</script>";  
}

elseif(!empty($skuword)){
$sql_011=mysqli_query($conn,"SELECT * FROM `order_data` where status='new'  AND not `mearge`='hide' AND `sku` LIKE '%$skuword%' 
  GROUP BY `id`,`sales_r_no`,`company_id`,`sale_date`
ORDER BY count(id) asc");  
}
elseif(!empty($shippingword)){
$sql_011=mysqli_query($conn,"SELECT * FROM `order_data` where status='new' AND not `mearge`='hide' AND `delivery_service` LIKE '%$shippingword%' 
  GROUP BY `id`,`sales_r_no`,`company_id`,`sale_date`
ORDER BY count(id) asc"); 
}
else{
$sql_011=mysqli_query($conn,"SELECT * FROM `order_data` where status='new' and not `mearge`='hide' GROUP BY `id`,`sales_r_no`,`company_id`,`sale_date`
ORDER BY count(id) asc");  
}
//echo "SELECT  *,SUM((sale_price*quantity) + postage_packing) as tot FROM `order_data` GROUP BY sales_r_no having status='new' and tot >='".$from."' and tot<='".$to."'"; 




while($data_011=mysqli_fetch_assoc($sql_011))
{$skus = [];

$sn++;
$id=$data_011['id'];

$sales_r_no =  $data_011['sales_r_no'];
$company_id_n =  $data_011['company_id'];
$sale_date_new =  $data_011['sale_date'];

/* 
$finalesaleprice=0;
$sql_sale_price = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$sales_r_no'");
while($data_sql_sale_price = mysqli_fetch_assoc($sql_sale_price))
{
	
	$sale_price_1=$data_sql_sale_price['sale_price'];
	$quantity_1=$data_sql_sale_price['quantity'];
	$postage_packing_1=$data_sql_sale_price['postage_packing'];
	$finalesaleprice+=(($sale_price_1*$quantity_1)+$postage_packing_1);
} */



$data_sku = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$sales_r_no' and `company_id`='$company_id_n' and `status`='new' and `sale_date`='$sale_date_new'");
while($sku_data = mysqli_fetch_assoc($data_sku))
{
	if($sku_data['item_title']==''){
		
	}else{
	if($sku_data['sku']==''){
	$skus[] = "<tr><td class='col-md-2' style='font-size:12px; word-wrap: break-word;'>".$sku_data['sku']."</td><td  class='col-md-1'>"."  ".$sku_data['quantity'].$sku_data['quantity_to_ship']."</td></tr>";
	}else{
	$skus[] = "<tr><td class='col-md-2' style='font-size:12px; word-wrap: break-word;'>".$sku_data['sku']."</td><td  class='col-md-1'>".$sku_data['quantity'].$sku_data['quantity_to_ship']."</td></tr>";
	}
	}
	

}

?>
<?php if($data_011['mearge']=='hide' or $data_011['buyer_name']==''){ ?>
<?php } else { ?>
<tr class="odd gradeX">
<td style="font-size:12px;">
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" name="company_order_id[]" value="<?php echo $id;?>" class="checkboxes"  />
<span></span>
</label>
</td>

<?php 

$c_id = $data_011['channel_id'];
$c_name_data = mysqli_query($conn,"select * from `channel` where `id`='$c_id'");
$data_c_name = mysqli_fetch_assoc($c_name_data);
?>
<td style="font-size:12px;"><img src="images/<?php echo $data_c_name['file'];?>" title="<?php echo $data_c_name['name'];?>" width="30px" height="30px"></td>
<td  style="font-size:12px;" class=""><div class="tooltip1"><?php echo $data_011['sales_r_no'];?><div class="">
<div class="portlet light">
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="portlet yellow-crusta box">
<div class="portlet-title">
<div class="caption">
<i class="fa fa-cogs"></i>Order Details </div>

</div>

<div class="portlet-body">
<div class="row static-info">
<div class="col-md-4 name">

<h4>OrderNo.<?php echo $data_011['sales_r_no'];?></h4>
</div><div class="col-md-4 name">

<h4>Note.</h4><p><?php echo $data_011['note'];?></p>
</div>

</div>
<hr class="custome_hr">
<?php 
$order_tile = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$sales_r_no' and `company_id`='$company_id_n'  and `status`='new' and `sale_date`='$sale_date_new'");
while($tiles_order = mysqli_fetch_assoc($order_tile)){
		if($tiles_order['sku']=='' or $tiles_order['mearge']=='hide'){
		
	}else{
?>
<div class="row static-info">
<div class="col-md-5 name">Product : </div>
<div class="col-md-7 value"><?php echo $tiles_order['item_title'];?></div>

</div>
<div class="row static-info">
<div class="col-md-5 name"> QTY : </div>
<div class="col-md-7 value">
<span class="label label-success"> <?php echo $tiles_order['quantity'];?> </span>
</div>
</div>

<div class="row static-info">
<div class="col-md-5 name">actual Record No: </div>
<div class="col-md-7 value"><?php echo $tiles_order['old_sales_r_no']?$tiles_order['old_sales_r_no']:$tiles_order['sales_r_no'];?></div>
</div>
<div class="row static-info">
<div class="col-md-5 name"> Sub-Total : </div>
<div class="col-md-7 value"><?php echo "&#163;".($tiles_order['sale_price'] + $tiles_order['postage_packing']);?></div>
</div>
<hr class="custome_hr">
<?php } ?>
<?php } ?>
</div>

</div>
</div>
</div>
</div>
</div></div>
</td>



<td style="font-size:12px;"><?php echo date('d-m-Y',strtotime($data_011['sale_date']));?></td>

<td style="font-size:12px;" class=""><div class=""><?php if(!empty($data_011['buyer_name'])){echo $data_011['buyer_name'];} ?>
</div>
</td>



<td style="font-size:12px;">
<div class=""><?php echo strtoupper($data_011['buyer_postcode']); ?></div>
</td>
<td style="font-size:12px;"><table width="230px" border="1px  #fafafa; word-wrap: break-word;"><?php  echo implode("",$skus); ?>

</table></td> 
<td style="font-size:12px;" class=""><?php 

$qdata = mysqli_query($conn,"select sum(quantity) as quantity12 from `order_data` where `sales_r_no`='$sales_r_no' and `company_id`='$company_id_n'  and `status`='new' and `sale_date`='$sale_date_new'");
$dataQ = mysqli_fetch_assoc($qdata);
echo $dataQ['quantity12'];
?>

</td>
<td style="font-size:12px;" class=""><?php echo $data_011['delivery_service']; ?>

</td>
<td style="font-size:12px;"><?php

$order_total = mysqli_query($conn,"SELECT * FROM `order_data`  WHERE `sales_r_no` ='$sales_r_no' and `company_id`='$company_id_n'  and `status`='new' and `sale_date`='$sale_date_new'");
while($total_order = mysqli_fetch_assoc($order_total)){
	$total_value += ($total_order['sale_price'] * $total_order['quantity']) + $total_order['postage_packing'];
}

echo $res = "&#163;".number_format($total_value,2);
$total_value = null;
?></td>
<td style="font-size:12px;"> <?php if($data_011['status']=='new') { ?>
<button type="button" class="label label-info">New</button>
<?php } elseif($data_011['status']=='inprogress') { ?>
<button type="button" class="label label-warning">In progress</button>
<?php } elseif($data_011['status']=='shipped' )  {
 ?>
<button type="button" class="label label-success">Shipped</button>
<?php } elseif($data_011['status']=='close') { ?>
<button type="button" class="label label-danger">Close</button>
<?php } ?>

<?php if($data_011['flag']=='holdorder') { ?>
<button type="button" class="label label-warning"> <span  class="icon-flag"></span>hold-order</button>
<?php }elseif($data_011['flag']=='urgent'){ ?>
<button type="button" class="label label-danger"> <span  class="icon-flag"></span>urgent</button>
<?php } ?> <?php if(mysqli_num_rows($data_sku)>1) { ?>
<button type="button" class="label label-success"> <span  class="icon-flag"></span>Merged</button>
<?php } ?>
</td>

<td style="font-size:12px;"> 

<div class="btn-group ">


<button onclick="addUser(this.value);" value="<?php echo $id; ?>" type="button" class="fa fa-user green1" ></button>
<button onclick="addNote(this.value);" value="<?php echo $id; ?>"  type="button" class="fa fa-edit notee"></button>
<button type="button" class="fa fa-truck truck"></button>

</div>


</td>



</tr>

<?php  } ?>
<?php  } ?>



<!-- <tr>
	<td style="font-size:12px;">
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" name="company_order_id[]" value="4353" class="checkboxes"  />
<span></span>
</label>
</td>
	<td>Order ID : 4353</td>
</tr> -->

<!-- <tr>
	<td style="font-size:12px;">
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" name="company_order_id[]" value="4352" class="checkboxes"  />
<span></span>
</label>
</td>
	<td>Order ID : 4352</td>	
</tr> -->

</tbody>
</table>
</form>
</div>
<div class="tab-pane fade" id="tab_1_2">
<div class="table-toolbar">
<div style="font-size:12px;" class="row">
<div class="row col-md-8">


<div  class="btn-group">
<select style="font-size:12px;" class="form-control custom-select" id="print_type1" onchange="FormStuff1();">
<option hidden value="select">Tools</option>
<option value="flag">Add Flag</option>



<option value="returnsform">Returns Form</option>
<option value="status">Change Status</option>



</select>
</div>
<div class="btn-group">
<button type="button"  style="font-size:9.1px;"  id="sample_editable_1_new" onclick="document.getElementById('form2').submit()" class="btn sbold green"> OK

</button>
</div>
<div class="btn-group">
<button type="button"  style="font-size:9.1px;"  onclick="ImportForm();" id="sample_editable_1_new" class="btn grey-cascade">Import</button> 
</div> 
<div class="btn-group"><button  style="font-size:9.1px;"  onclick="Export_progress();" id="sample_editable_1_new" class="btn sbold blue">Export</button></div>
<div class="btn-group"><button  style="font-size:9.1px;" onclick="InvoiceProgress();" id="sample_editable_1_new" type="button"  class="btn green-meadow"> Invoice</button></div>
<div class="btn-group"><button  style="font-size:9.1px;" onclick="mearge_progress();" id="sample_editable_1_new" class="btn purple-plum">Merge</button></div>
<div class="btn-group"><button  style="font-size:9.1px;" onclick="UnmergeInprogress();" id="sample_editable_1_new" class="btn blue-hoki">UnMerge</button></div>
<div class="btn-group"><button style="font-size:9.1px;" onclick="Dispatch2();" id="sample_editable_1_new" class="btn grey-mint">Mail</button></div>
<div class="btn-group"><button style="font-size:9.1px;"  onclick="ReceiptProgress();" id="sample_editable_1_new" class="btn btn-warning">10 Per Sheet</button></div>
<div class="btn-group"><button style="font-size:9.1px;"  onclick="JobSheetProgress();" id="sample_editable_1_new" class="btn red">Packing List</button></div>
<div class="btn-group"><button  style="font-size:9.1px;" onclick="PackingListProgress();" id="sample_editable_1_new" class="btn blue">Picking List</button></div>
<div class="btn-group ">
<select style="font-size:12px;" class="form-control fltr" name="filter_name" id="filter_name" onchange="runF(this.value);">
<option>Filter</option>
<option value="shipping">Shipping</option>
<option value="price">Price</option>
<option value="sku">SKU</option>
</select>
<input type="text" value="#tab_1_2" hidden="">
</div>
<div class="btn-group "><button style="font-size:9.1px;"  onclick="delete_progress_order();" id="sample_editable_1_new" class="btn sbold red"> Delete

</button></div>
<div class="btn-group "><a href="c_order_view.php#tab_1_2"><button  style="font-size:9.1px;"  id="sample_editable_1_new" class="btn grey-mint"> Refresh

</button></a></div>
</div>
</div>

</div>
<script>

</script>
<form  method="post" id="form2" name="print1" action="/">
<div id="selectstatus1"></div>
<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_2">
<thead>
<tr>
<th>
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="group-checkable" data-set="#sample_2 .checkboxes" />
<span></span>
</label>
</th>  
<th style="font-size:12px;">Logo</th>
<th style="font-size:12px;">order Id</th>
<th style="font-size:12px;">Date</th>
<th style="font-size:12px;">Customer</th>
<th style="font-size:12px;">PostCode</th>
<th style="font-size:12px;">SKU</th>
<th style="font-size:12px;">QTY</th>
<th style="font-size:12px;">Shipping</th>
<th style="font-size:12px;">Total</th>
<th style="font-size:12px;  width: 20px;"><div class="">Status</div></th>
<th style="font-size:12px;"><div class="statuss">-</div></th>
</tr>
</thead>
<tbody>
<?php
$sn=0;

$from_progress = $_GET['from_progress'];
$to_progress = $_GET['to_progress'];
$skuword_progress = $_GET['skuword_progress'];
$shippingword_progress = $_GET['shippingword_progress'];

if(!empty($from_progress) or !empty($to_progress)){
//$sql_013=mysqli_query($conn,"SELECT * FROM `order_data` where status='inprogress' AND `sale_price` between ".floatval($from_progress)." AND ".floatval($to_progress)." ORDER BY id DESC");

$sql_013=mysqli_query($conn,"SELECT  *,SUM((sale_price*quantity) + postage_packing) as tot FROM `order_data` GROUP BY `company_id`,`sales_r_no`,`sale_date` having status='inprogress' and not  `mearge`='hide' and tot >=".$from_progress." and tot<=".$to_progress." ORDER BY id asc");

}elseif(!empty($skuword_progress)){
$sql_013=mysqli_query($conn,"SELECT * FROM `order_data` where  status='inprogress'  and not  `mearge`='hide' and CONCAT(UPPER(sku),UPPER(sku)) like UPPER('%$skuword_progress%') GROUP BY `sales_r_no`
ORDER BY count(id)  asc");  
}elseif(!empty($shippingword_progress)){
$sql_013=mysqli_query($conn,"SELECT * FROM `order_data` where status='inprogress'  and not  `mearge`='hide' and CONCAT(UPPER(delivery_service),UPPER(ship_service_level)) like UPPER('%$shippingword_progress%') GROUP BY `company_id`,`sales_r_no`,`sale_date`
ORDER BY count(id)  DESC");  

}else{
$sql_013=mysqli_query($conn,"SELECT * FROM `order_data` where status='inprogress' and not  `mearge`='hide' GROUP BY `id`,`company_id`,`sales_r_no`,`sale_date`
ORDER BY count(id) asc");

}
//SELECT  *,SUM((sale_price*quantity) + postage_packing) as tot FROM `order_data` GROUP BY `company_id`,`sales_r_no`,`sale_date` having status='new' and not  `mearge`='hide'  and tot >=".$from." and tot<=".$to." order by `id` DESC
//ORDER BY count(id) asc
//GROUP BY `id`,`sales_r_no`,`company_id`,`sale_date`
while($data_0011=mysqli_fetch_assoc($sql_013))
{
$skus1 = [];
$sn++;
$id1=$data_0011['id'];
$sales_r_no_p = $data_0011['sales_r_no'];
$company_id_p = $data_0011['company_id'];
$sale_date_p = $data_0011['sale_date'];
$name=$data_0011['name'];
$data_sku1 = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$sales_r_no_p' and `company_id`='$company_id_p' and `status`='inprogress' and `sale_date` = '$sale_date_p'");
while($sku_data1 = mysqli_fetch_assoc($data_sku1))
{

if($sku_data1['sku']==''){

}else{
$skus1[] = "<tr><td class='col-md-2' style='font-size:12px; word-wrap: break-word;'>".$sku_data1['sku']."</td><td  class='col-md-1'>".$sku_data1['quantity'].$sku_data1['quantity_to_ship']."</td></tr>";
}

}
?>
<?php if($data_0011['mearge']=='hide' or $data_0011['buyer_name']==''){ ?>
<?php } else { ?>
<tr class="odd gradeX">
<td style="font-size:12px;">
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" name="company_order_id[]" value="<?php echo $id1;?>" class="checkboxes"  />
<span></span>
</label>
</td>

<?php 

$c_id = $data_0011['channel_id'];
$c_name_data = mysqli_query($conn,"select * from `channel` where `id`='$c_id'");
$data_c_name = mysqli_fetch_assoc($c_name_data);
?>
<td style="font-size:12px;"><img src="images/<?php echo $data_c_name['file'];?>" title="<?php echo $data_c_name['name'];?>" width="30px" height="30px"></td>
<td style="font-size:12px;" class=""><div class="tooltip1"><?php echo $data_0011['sales_r_no'];?><div class="">
<div class="portlet light">
<div class="row">
<div style="font-size:12px;" class="col-md-12 col-sm-12">
<div class="portlet yellow-crusta box">
<div class="portlet-title">
<div class="caption">
<i class="fa fa-cogs"></i>Order Details </div>

</div>
<div class="portlet-body">
<div class="row static-info">

<div class="col-md-4 name">

<h4>OrderNo.<?php echo $data_0011['sales_r_no'];?></h4>
</div><div class="col-md-4 name">

<h4>Note.</h4><p><?php echo $data_0011['note'];?></p>
</div>

</div>
<hr class="custome_hr">
<?php 
$sales_r_no1 =  $data_0011['sales_r_no'];
$order_tile1 = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$sales_r_no1' and `company_id`='$company_id_p' and `status`='inprogress' and `sale_date` = '$sale_date_p'");
while($tiles_order1 = mysqli_fetch_assoc($order_tile1)){
	if($tiles_order1['sku']=='' or $tiles_order1['mearge']=='hide'){
		
	}else{
?>
<div class="row static-info">
<div class="col-md-5 name">Product : </div>
<div class="col-md-7 value"><?php echo $tiles_order1['item_title'];?></div>

</div>
<div class="row static-info">
<div class="col-md-5 name"> QTY : </div>
<div class="col-md-7 value">
<span class="label label-success"> <?php echo $tiles_order1['quantity'];?> </span>
</div>
</div>
<div class="row static-info">
<div class="col-md-5 name">actual Record No: </div>
<div class="col-md-7 value"><?php echo $tiles_order1['old_sales_r_no']?$tiles_order1['old_sales_r_no']:$tiles_order11['sales_r_no'];?></div>
</div>
<div class="row static-info">
<div class="col-md-5 name"> Sub-Total : </div>
<div class="col-md-7 value"><?php echo "&#163;".($tiles_order1['sale_price']+$tiles_order1['postage_packing']);?></div>
</div>
<hr class="custome_hr">
<?php } ?>
<?php } ?>

</div>
</div>
</div>
</div>
</div>
</div></div>
</td>
<td style="font-size:12px;"><?php echo date('d-m-Y',strtotime($data_0011['sale_date']));?></td>

<td style="font-size:12px;" class=""><div class=""><?php if(!empty($data_0011['buyer_name'])){echo $data_0011['buyer_name'];} ?>
</div>
</td>



<td style="font-size:12px;">
<div class=""><?php echo strtoupper($data_0011['buyer_postcode']); ?></div>
</td>

<td style="font-size:12px;"><table width="230px" border="1px  #fafafa; word-wrap: break-word;"><?php  echo implode("",$skus1); ?>

</table></td> 
<td style="font-size:12px;" class=""><?php 

$qdata1 = mysqli_query($conn,"select sum(quantity) as quantity1 from `order_data` where `sales_r_no`='$sales_r_no1' and `company_id`='$company_id_p' and `status`='inprogress' and `sale_date` = '$sale_date_p'");
$dataQ1 = mysqli_fetch_assoc($qdata1);
echo $dataQ1['quantity1'];
?></td>
<td style="font-size:12px;" class=""><?php echo $data_0011['delivery_service']; ?>

</td>
<td style="font-size:12px;"><?php

$order_total1 = mysqli_query($conn,"SELECT * FROM `order_data`  WHERE `sales_r_no` ='$sales_r_no1' and `company_id`='$company_id_p' and `status`='inprogress' and `sale_date` = '$sale_date_p'");
while($total_order1 = mysqli_fetch_assoc($order_total1)){
	$total_value1 += ($total_order1['sale_price'] * $total_order1['quantity']) + $total_order1['postage_packing'];
}

echo $res1 = "&#163;".number_format($total_value1,2);
$total_value1= null;
?></td>
<td style="font-size:12px;"> <?php if($data_0011['status']=='new') { ?>
<button type="button" class="label label-info">New</button>
<?php } elseif($data_0011['status']=='inprogress') { ?>
<button type="button" class="label label-warning">In progress</button>
<?php } elseif($data_0011['status']=='shipped' )  { ?>
<button type="button" class="label label-success">Shipped</button>
<?php } elseif($data_0011['status']=='close') { ?>
<button type="button" class="label label-danger">Close</button>
<?php } ?>

<?php if($data_0011['flag']=='holdorder') { ?>
<button type="button" class="label label-warning"> <span  class="icon-flag"></span>hold-order</button>
<?php }elseif($data_0011['flag']=='urgent'){ ?>
<button type="button" class="label label-danger"> <span  class="icon-flag"></span>urgent</button>
<?php } ?>
<?php
$count = mysqli_num_rows($data_sku1);
 if($count>1) { ?>
<button type="button" class="label label-success"> <span  class="icon-flag"></span>Merged</button>
<?php }?>
</td>

<td style="font-size:12px;"> 

<div class="btn-group ">


<button onclick="addUser(this.value);" value="<?php echo $id1; ?>" type="button" class="fa fa-user green1" ></button>
<button type="button" onclick="addNoteProgress(this.value);"  value="<?php echo $id1; ?>"  class="fa fa-edit notee"></button>
<button type="button" class="fa fa-truck truck"></button>


</div><br>
<?php if(!empty($data_0011['user'])) { ?>
<button type="button" class="label label-warning"> <span  class="icon-user b11"></span>&nbsp;<span class="b11"><?php
$user_id =  $data_0011['user'];
$user_data1 = mysqli_query($conn,"select * from `user` where `uid`='$user_id'");
$data_user1 = mysqli_fetch_assoc($user_data1);
echo $data_user1['uname'];
?></span></button>
<?php } ?>
</td>




</tr>
<?php  } ?>
<?php  } ?>
</tbody>
</table>

</form>




<!-- tab 3 end--></div>


<!-- tab 3 start-->



<?php /*
<div class="tab-pane fade active in" id="tab_1_3">
	<form  method="post" id="form1" name="print" action="/">
	<div id="selectstatus"></div>
	<table style="font-size: 12px;" class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
	<thead  style="font-size: 12px;">
	<tr>
	

	<th style="font-size:12px;">ID</th>
	<th style="font-size:12px;">Total Orders</th>
	<th style="font-size:12px;">Address</th>
	<th style="font-size:12px;">Postal Code</th>



	</tr>
	</thead>
	<tbody>

	<?php 

	$getTrasaction = mysqli_query($conn, "SELECT * FROM transaction");
	if(mysqli_fetch_row($getTrasaction) > 0){
		$i = 1;
		while ($transaction = mysqli_fetch_array($getTrasaction)) {

			?>
				<tr>
					<td><?php echo $i ?></td>
					<td><?php 
						$orders = trim($transaction['order_id'], '[]');
						$orderCount = explode(',', $orders);
						echo count($orderCount); 
					?></td>
					<td><?php echo $transaction['address'] ?></td>
					<td><?php echo $transaction['post_code'] ?></td>
				</tr>
			<?php
			$i++;
		}
	}

	 ?>

	</tbody>
	</table>
	</form>
</div>

*/ ?>

</div>
<!-- END EXAMPLE TABLE PORTLET-->
</div>
</div>
</div>

</div>
<!-- END PAGE CONTENT INNER -->
</div>
</div>
<!-- END PAGE CONTENT BODY -->
<!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
<!-- BEGIN QUICK SIDEBAR -->

<!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<!-- BEGIN PRE-FOOTER -->
<?php include 'footer.php';?>
<!-- END INNER FOOTER -->
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="form.js" type="text/javascript"></script>
<script src="custome.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../assets/global/scripts/datatable.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
<script src="../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
<script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
<script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script>


	function order_transaction() {
		console.log("test")
	}	  
		  
				
</script>
<style>

</style>

<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>
