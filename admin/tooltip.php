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