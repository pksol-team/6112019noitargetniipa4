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

<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="tab-content">



<div class="tab-pane active " id="tab_1_3 ">
<div class="table-toolbar">
<div class="row">
<div class="row col-md-8">


<div class="btn-group">
<select style="font-size:12px;" class="form-control custom-select" id="print_type2" onchange="FormStuff2();">
<option hidden value="select">Tools</option>
<option value="flag">Add Flag</option>



<option value="returnsform">Returns Form</option>
<option value="status">Change Status</option>



</select>
</div>
<div class="btn-group">
<button type="button" style="font-size:8.5px;"  id="sample_editable_1_new" onclick="document.getElementById('form3').submit()" class="btn sbold green"> OK

</button>
</div>
<div class="btn-group">
<button type="button" style="font-size:8.5px;"  onclick="ImportForm();" id="sample_editable_1_new" class="btn grey-cascade">Import</button> 
</div> 
<div class="btn-group"><button  style="font-size:8.5px;"  onclick="Export_despatch();" id="sample_editable_1_new" class="btn sbold blue"> Export</button></div>
<div class="btn-group"><button  style="font-size:8.5px;" onclick="InvoiceDispatch();" id="sample_editable_1_new" type="button"  class="btn green-meadow"> Invoice</button></div>
<div class="btn-group"><button style="font-size:8.5px;"  onclick="mearge_despatch();" id="sample_editable_1_new" class="btn purple-plum"> Merge</button></div>
<div class="btn-group"><button style="font-size:8.5px;"  onclick="UnmergeDispatch();" id="sample_editable_1_new" class="btn blue-hoki"> UnMerge</button></div>
<div class="btn-group"><button style="font-size:8.5px;" onclick="Dispatch3();" id="sample_editable_1_new" class="btn grey-mint">Mail</button></div>

<div class="btn-group"><button  style="font-size:8.5px;" onclick="ReceiptDispatch();" id="sample_editable_1_new" class="btn btn-warning">10 Per Sheet</button></div>
<div class="btn-group"><button  style="font-size:8.5px;" onclick="JobSheetDispatch();" id="sample_editable_1_new" class="btn red">Packing List</button></div>
<div class="btn-group"><button style="font-size:8.5px;"  onclick="PackingListDispatch();" id="sample_editable_1_new" class="btn blue">Picking List</button></div>
<div class="btn-group">
<select style="font-size:12px;" class="form-control fltr" name="filter_name" id="filter_name" onchange="runX(this.value);">
<option>Filter</option>
<option value="shipping">Shipping</option>
<option value="price">Price</option>
<option value="sku">SKU</option>
</select>
<input type="text" value="#tab_1_3" hidden="">
</div>
<div class="btn-group "><button  style="font-size:8.5px;" onclick="delete_despatch_order();" id="sample_editable_1_new" class="btn sbold red"> Delete

</button></div>

<div class="btn-group "><a href="dispatch.php"><button  style="font-size:8.5px;"  id="sample_editable_1_new" class="btn grey-mint"> Refresh

</button></a></div>
<div class="btn-group ">
<form action="dispatch.php" method="get">
<input type="date" name="order_date" value="" style="font-size:11px;"  class="form-control custom-select" onchange="this.form.submit()">
</form>
</div>
</div>

</div>
</div>
<script>

</script>
<form  method="post" id="form3" name="print2" action="/">
<div id="selectstatus2"></div>
<table data-page-length="100" class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_3">
<thead>
<tr>
<th style="font-size:12px;">
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" class="group-checkable" data-set="#sample_3 .checkboxes" />
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

<th style="font-size:12px; "><div class="statuss">-</div></th>



</tr>
</thead>
<tbody>
<?php
$sn=0;


$from_despatch = $_GET['from_despatch'];
$to_despatch = $_GET['to_despatch'];
$skuword_despatch = $_GET['skuword_despatch'];
$shippingword_despatch = $_GET['shippingword_despatch'];
$order_date = $_GET['order_date'];
if(!empty($from_despatch) or !empty($to_despatch)){
	//echo "<script>alert();</script>";
//$sql_0111=mysqli_query($conn,"SELECT * FROM `order_data` where status='shipped' AND `sale_price` between ".floatval($from_despatch)." AND ".floatval($to_despatch)." ORDER BY id DESC"); 
$sql_0111=mysqli_query($conn,"SELECT  *,SUM((sale_price*quantity) + postage_packing) as tot FROM `order_data` GROUP BY `company_id`,`sales_r_no`,`sale_date` having status='shipped' and tot >=".$from_despatch." and tot<=".$to_despatch." order by `id` asc");
  
}elseif(!empty($skuword_despatch)){
$sql_0111=mysqli_query($conn,"SELECT * FROM `order_data` where status='shipped' AND CONCAT(UPPER(sku),UPPER(sku)) like UPPER('%$skuword_despatch%') GROUP BY `company_id`,`sales_r_no`,`sale_date`
ORDER BY id asc limit 100");    
}elseif(!empty($shippingword_despatch)){
$sql_0111=mysqli_query($conn,"SELECT * FROM `order_data` WHERE `status`='shipped' AND CONCAT(UPPER(delivery_service),UPPER(ship_service_level)) LIKE UPPER('%$shippingword_despatch%')  GROUP BY `company_id`,`sales_r_no`,`sale_date`
ORDER BY id asc limit 100 " ); 

}elseif(!empty($_GET['order_date'])){
	 //$date = date('Y-m-d');
	 
$sql_0111=mysqli_query($conn,"SELECT * FROM `order_data` where status='shipped' AND `dispatch_date`='".$_GET['order_date']."' GROUP BY `id`,`company_id`,`sales_r_no`,`sale_date`
ORDER BY id asc "); 

}else{
 $date = date('Y-m-d');
$sql_0111=mysqli_query($conn,"SELECT * FROM `order_data` where `status`='shipped'  AND `dispatch_date`='$date' GROUP BY `id`,`sales_r_no`,`company_id`,`sale_date` ORDER BY id asc  limit 100 ");
//echo "SELECT * FROM `order_data` where `status`='shipped' AND not `status`='hide' AND `dispatch_date`='$date' GROUP BY `id`,`sales_r_no`ORDER BY id asc ";  	
}

while($data_0111=mysqli_fetch_assoc($sql_0111))
{
$skus1_d = [];
$sn++;
$id2=$data_0111['id'];
$sales_r_no_p1 = $data_0111['sales_r_no'];
$company_id = $data_0111['company_id'];
$name=$data_0111['name'];

?>
<?php if($data_0111['mearge']=='hide' or $data_0111['buyer_name']==''){?>
<?php } else{ ?>
<tr class="odd gradeX">
<td style="font-size:12px;">
<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
<input type="checkbox" name="company_order_id[]" value="<?php echo $id2;?>" class="checkboxes"  />
<span></span>
</label>
</td>

<?php 

$c_id = $data_0111['channel_id'];
$c_name_data = mysqli_query($conn,"select * from `channel` where `id`='$c_id'");
$data_c_name = mysqli_fetch_assoc($c_name_data);
?>
<td><img src="images/<?php echo $data_c_name['file'];?>" title="<?php echo $data_c_name['name'];?>" width="30px" height="30px"></td>
<td style="font-size:12px;" class=""><div class="tooltip1"><?php echo $data_0111['sales_r_no'];?><div style="font-size:12px;" class="">
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

<h4>OrderNo.<?php echo $data_0111['sales_r_no'];?></h4>
</div><div class="col-md-4 name">

<h4>Note.</h4><p><?php echo $data_0111['note'];?></p>
</div>

</div>
<hr class="custome_hr">
<?php 
$sales_r_no2 =  $data_0111['sales_r_no'];
$order_tile11 = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$sales_r_no2' and `company_id`='$company_id' and `status`='shipped'");
while($tiles_order11 = mysqli_fetch_assoc($order_tile11)){
	if($tiles_order11['sku']=='' or $tiles_order11['mearge']=='hide'){
		
	}else{
?>
<div class="row static-info">
<div class="col-md-5 name">Product : </div>
<div class="col-md-7 value"><?php echo $tiles_order11['item_title'];?></div>

</div>
<div class="row static-info">
<div class="col-md-5 name"> QTY : </div>
<div class="col-md-7 value">
<span class="label label-success"> <?php echo $tiles_order11['quantity'];?> </span>
</div>
</div>
<div class="row static-info">
<div class="col-md-5 name">Actual Record No: </div>
<div class="col-md-7 value"><?php echo $tiles_order11['old_sales_r_no']?$tiles_order11['old_sales_r_no']:$tiles_order11['sales_r_no'];?></div>
</div>
<div class="row static-info">
<div class="col-md-5 name"> Sub-Total : </div>
<div class="col-md-7 value"><?php echo "&#163;".($tiles_order11['sale_price']+$tiles_order11['postage_packing']);?></div>
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
<td style="font-size:12px;"><?php echo date('d-m-Y',strtotime($data_0111['sale_date']));?></td>

<td style="font-size:12px;" class=""><div class=""><?php if(!empty($data_0111['buyer_name'])){echo $data_0111['buyer_name'];} ?>
</div>
</td>



<td style="font-size:12px;">
<div class=""><?php echo strtoupper($data_0111['buyer_postcode']); ?></div>
</td>
<td style="font-size:12px;"> 
<?php  $data_sku1_d = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$sales_r_no_p1' and `company_id`='$company_id'  and `status`='shipped'");
while($sku_data1_d = mysqli_fetch_assoc($data_sku1_d))
{

if($sku_data1_d['sku']==''){

}else{
$skus1_d[] = "<tr><td class='col-md-2' style='font-size:12px; word-wrap: break-word;'>".$sku_data1_d['sku']."</td><td  class='col-md-1'>".$sku_data1_d['quantity'].$sku_data1_d['quantity_to_ship']."</td></tr>";
}

}


?>
<table width="230px" border="1px  #fafafa; word-wrap: break-word;"><?php  echo implode("",$skus1_d); ?>

</table> 
</td>
<td style="font-size:12px;" class=""><?php 

$qdata12 = mysqli_query($conn,"select sum(quantity) as quantity1 from `order_data` where `sales_r_no`='$sales_r_no2' and `company_id`='$company_id'  and `status`='shipped'");
$dataQ12 = mysqli_fetch_assoc($qdata12);
echo $dataQ12['quantity1'];
?>
</td>
<td style="font-size:12px;" class=""><?php echo $data_0111['delivery_service']; ?>

</td>
<td style="font-size:12px;"><?php



$order_total2 = mysqli_query($conn,"SELECT * FROM `order_data`  WHERE `sales_r_no` ='$sales_r_no2' and `company_id`='$company_id' and `status`='shipped'");
while($total_order2 = mysqli_fetch_assoc($order_total2)){
	$total_value2 += ($total_order2['sale_price'] * $total_order2['quantity']) + $total_order2['postage_packing'];
}

echo $res2 = "&#163;".number_format($total_value2,2);
$total_value2= null;
?></td>
<td style="font-size:12px;"> <?php if($data_0111['status']=='new') { ?>
<button type="button" class="label label-info">New</button>
<?php } elseif($data_0111['status']=='inprogress') { ?>
<button type="button" class="label label-warning">In progress</button>
<?php } elseif($data_0111['status']=='shipped' )  { ?>
<button type="button" class="label label-success">Shipped</button>
<?php } elseif($data_0111['status']=='close') { ?>
<button type="button" class="label label-danger">Close</button>
<?php } ?>

<?php if($data_0111['flag']=='holdorder') { ?>
<button type="button" class="label label-warning"> <span  class="icon-flag"></span>hold-order</button>
<?php }elseif($data_0111['flag']=='urgent'){ ?>
<button type="button" class="label label-danger"> <span  class="icon-flag"></span>urgent</button>
<?php } ?>
<?php if(mysqli_num_rows($data_sku1_d)>1) { ?>
<button type="button" class="label label-success"> <span  class="icon-flag"></span>Merged</button>
<?php }?>
</td>

<td style="font-size:12px;"> 

<div class="btn-group ">


<button onclick="addUser(this.value);" value="<?php echo $id2; ?>" type="button" class="fa fa-user green1" ></button>
<button type="button" onclick="addNoteDispatch(this.value);"  value="<?php echo $id2; ?>" class="fa fa-edit notee"></button>
<button type="button" class="fa fa-truck truck"></button>


</div><br>
<?php if(!empty($data_0111['user'])) {  ?>
<button type="button" class="label label-warning"> <span  class="icon-user b11"></span>&nbsp;<span class="b11"><?php
$user_id =  $data_0111['user'];
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

<!-- tab 2 end--></div>
<!-- tab 3 start-->

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


 			  
				  
				
</script>
<style>

</style>

<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>
