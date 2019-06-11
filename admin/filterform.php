<?php 
include 'config.php';
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
}
$filter_name = $_GET['filter_name'];

?>

<div id="std_div">
<?php if($filter_name=='price'){ ?>

<form action="c_order_view.php#tab_1_1" method="get">
<div class="">
<div class="form-group ">
<label class="control-label">From</label>
<input type="date" name="from" value="" placeholder="From" class="form-control col-md-4">
</div>
<div class="form-group ">
<label class="control-label">To</label>
<input type="date" name="to" value="" placeholder="To" class="form-control ">
</div>
<div class="button-group">
<button type="submit" class="btn sbold blue">Filter</button>
</div>
</div>
</form>

<?php } elseif($filter_name=='sku') { ?>

<div class="form-group">
<form action="c_order_view.php#tab_1_1" method="get">

<input type="text" name="skuword" value="" class="form-control">
<button type="submit" class="btn sbold blue">Filter</button>
</form>
</div>
<?php } ?>
</div>



