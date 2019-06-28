<div id="importform">
<center>
<div class="filterdiv">
<div class=" ">
                                    <!-- BEGIN SAMPLE FORM PORTLET-->
                                     <div class="portlet light portlet-fit portlet-form bordered" id="form_wizard_1">
                               
                                
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-red"></i>
                                        <span class="caption-subject font-red sbold uppercase">Project add-form</span>
                                    </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    <!-- BEGIN FORM-->
                                    <form method="post" action="import/import_dispatch.php" enctype="multipart/form-data" name="upload_excel" class="form-horizontal">
                                        <div class="form-body">
                                            <div class="alert alert-danger display-hide">
                                                <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>
                                            <div class="alert alert-success display-hide">
                                                <button class="close" data-close="alert"></button> Your form validation is successful! </div>
                                            
                                           
											
                                            <div class="form-group">
                                                <label class="control-label col-md-4">Company
                                                    
                                                </label>
                                                <div class="col-md-6">
                                                  
                                                <select required type="text" name="company_name" onChange="std_cahnge_fun(this.value);"  id="company_name"  class="form-control">
												<option>select</option>
												<?php
												$data = mysqli_query($conn,"select * from `company`");
												while($tada = mysqli_fetch_assoc($data))
												{
												?>
												<option value="<?php echo $tada['id'];?>"><?php echo $tada['name'];?></option>
												<?php } ?>
												</select>
												
                                                <!-- Image preview -->
                                                
                                            </div>
                                            </div>
											 <script>
					  function std_cahnge_fun(company_name)
					  {
						  $.ajax({
							
							type:"POST",
							url:"channelget.php?company_name="+company_name,
							success:function(data)
							{
								$("#std_div").replaceWith(data);
							}							
								
						  });
					  }
					  </script>
					  <div  class="form-group">
					  <div id="std_div">
					  
					  </div>
					  </div>
											<div class="form-group">
                                                <label class="control-label col-md-4">Upload File
                                                    
                                                </label>
                                                <div class="col-md-6">
                                                  
                                                <input  required type="file" name="file" id="file" onchange="return fileValidation();" class="form-control" />
												
                                                <!-- Image preview -->
                                                
                                            </div>
                                            </div><br>
											<a href="Amazon_Import_1.csv" download><span>demo.csv</span></a>
											
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <button type="submit" class="btn green">Submit</button>
                                                   <button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END FORM-->
                                </div>
                            </div><script>
							
									function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
	
    var allowedExtensions = /(\.xlsb|\.xlsx|\.xls|\.xlm|\.xlt|\.xlsm|\.xltx|\.xltm|\.xla|\.xll|\.xlam|\.xlw|\.csv)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file like excel only.');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
	
}

									</script>
                            
                                    <!-- END SAMPLE FORM PORTLET-->
                                    <!-- BEGIN SAMPLE FORM PORTLET-->
                                   
                                </div>
                                </div>
								</center>
</div>

<!-- tab 1 -->
<div id="logindiv">

<form action="c_order_view.php#tab_1_1" method="get">

<center><div class="filterdiv">

<div class="form-group ">
<label class="control-label">From</label>
<input type="text" name="from"  placeholder="From" class="form-control fltr">
</div>
<div class="form-group ">
<label class="control-label">To</label>
<input type="text" name="to"  placeholder="To" class="form-control fltr">
</div>
<div class="button-group">
<button type="submit" class="btn sbold blue">Filter</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
</center>
</div>
<div id="tooltiphover">


<center>
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
</center>
</div>

<div id="addnote">

<form action="c_order_view.php#tab_1_1" method="get">

<center><div class="filterdiv">

<div class="form-group ">
<label class="control-label">From</label>
<textarea colspan="3" type="text" name="note" id="note_des"  placeholder="From" class="form-control fltr"></textarea>
<input type="text" name="order_id_note" id="order_id_note" placeholder="From" class="form-control fltr">
</div>

<div class="button-group">
<button type="button" onclick="submitNote();" class="btn sbold blue">Submit</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
<script>
function submitNote(){
									 var note = $('#note_des').val();
									 var order_id = $('#order_id_note').val();
									
									$.ajax({ url: 'addnote.php',
     data: {
         'note' : note,
         'order_id' : order_id
     },
     type: 'post',
    
     success: function(data) {
                  alert("User Added Successfully");
				  $("#addnote").css("display","none");
				 
				  $("#sample_1").load(" #sample_1");
				  $("#sample_2").load(" #sample_2");
				  $("#sample_3").load(" #sample_3");
              }
});
									}
</script>
</center>
</div>
<div id="addnote_progress">

<form action="c_order_view.php#tab_1_1" method="get">

<center><div class="filterdiv">

<div class="form-group ">
<label class="control-label">From</label>
<textarea colspan="3" type="text" name="note_des_progress" id="note_des_progress"  placeholder="From" class="form-control fltr"></textarea>
<input type="text" name="order_id_note_progress" id="order_id_note_progress" placeholder="From" class="form-control fltr">
</div>

<div class="button-group">
<button type="button" onclick="submitNoteProgress();" class="btn sbold blue">Submit</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
<script>
function submitNoteProgress(){
									 var note = $('#note_des_progress').val();
									 var order_id = $('#order_id_note_progress').val();
									
									$.ajax({ url: 'addnote.php',
     data: {
         'note' : note,
         'order_id' : order_id
     },
     type: 'post',
    
     success: function(data) {
                  alert("User Added Successfully");
				  $("#addnote_progress").css("display","none");
				 
				  $("#sample_1").load(" #sample_1");
				  $("#sample_2").load(" #sample_2");
				  $("#sample_3").load(" #sample_3");
              }
});
									}
</script>
</center>
</div>

<div id="addnote_dispatch">

<form action="c_order_view.php#tab_1_1" method="get">

<center><div class="filterdiv">

<div class="form-group ">
<label class="control-label">From</label>
<textarea colspan="3" type="text" name="note" id="note_des_dispatch"  placeholder="From" class="form-control fltr"></textarea>
<input type="text" name="order_id_note" id="order_id_note_dispatch" placeholder="From" class="form-control fltr">
</div>

<div class="button-group">
<button type="button" onclick="submitNoteDispatch();" class="btn sbold blue">Submit</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
<script>
function submitNoteDispatch(){
									 var note = $('#note_des_dispatch').val();
									 var order_id = $('#order_id_note_dispatch').val();
									
									$.ajax({ url: 'addnote.php',
     data: {
         'note' : note,
         'order_id' : order_id
     },
     type: 'post',
    
     success: function(data) {
                  alert("User Added Successfully");
				  $("#addnote_dispatch").css("display","none");
				 
				  $("#sample_1").load(" #sample_1");
				  $("#sample_2").load(" #sample_2");
				  $("#sample_3").load(" #sample_3");
              }
});
									}
</script>
</center>
</div>

 <div id="logindiv1">

<form action="c_order_view.php#tab_1_1" method="get">

<center><div class="filterdiv">

<div class="form-group ">
<label class="control-label">SKU Filter</label>
<input type="text" name="skuword"  placeholder="enter SKU" class="form-control fltr">
</div>

<div class="button-group">
<button type="submit" class="btn sbold blue">Filter</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
</center>
</div>

 <div id="logindiv2">

<form action="c_order_view.php#tab_1_1" method="get">

<center><div class="filterdiv">

<div class="form-group">
<label class="control-label">Shipping Filter</label>

<select class="filter-courier-dropdown form-control custom-select" name="shippingword">								
	<option value="" disabled selected>Select Courier</option>
	<option value="Next Day">Next Day</option>
	<option value="Royal Mail">Royal Mail</option>
	<option value="myHermes">myHermes</option>
	<option value="Other Courier">Other Courier</option>
</select>

<!-- <input type="text" name="shippingword"  placeholder="Enter Courier" class="form-control fltr"> -->


</div>

<div class="button-group">
<button type="submit" class="btn sbold blue">Filter</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
</center>
</div>

 <div id="addusertab1">

<form action="c_order_view.php#tab_1_1" method="get">

<center><div class="filterdiv">

<div class="form-group">
<label class="control-label">User</label>
<select type="text" name="user_name" id="user_name"  class="form-control fltr">
<option>Select User</option>
<?php 

$user_data11 = mysqli_query($conn,"select * from `user` ");
while($data_user11 = mysqli_fetch_assoc($user_data11)){
	?>
<option value="<?php echo $data_user11['uid'];?>"><?php echo $data_user11['uname'];?></option>
<?php } ?>
</select>
</div>
<input  type="text" name="order_id" id="order_id" value="">
<div class="button-group">
<button type="button" onclick="submitUser();" class="btn sbold blue">Submit</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
</center>
<script>
function submitUser(){
									 var user_name = $('#addusertab1 #user_name').val();
									 var order_id = $('#addusertab1 #order_id').val();
									
									$.ajax({ url: 'adduser.php',
     data: {
         'user_name' : user_name,
         'order_id' : order_id
     },
     type: 'post',
    
     success: function(data) {
                  alert("User Added Successfully");
				  $("#addusertab1").css("display","none");
				 
				  $("#sample_1").load(" #sample_1");
				  $("#sample_2").load(" #sample_2");
				  $("#sample_3").load(" #sample_3");
              }
});
									}
</script>
</div>


<!-- end tab 1 -->

<!-- tab 2-->

<div id="logindiv_progress">

<form action="c_order_view.php#tab_1_2" method="get">

<center><div class="filterdiv">

<div class="form-group ">
<label class="control-label">From</label>
<input type="text" name="from_progress"  placeholder="From" class="form-control fltr">
</div>
<div class="form-group ">
<label class="control-label">To</label>
<input type="text" name="to_progress"  placeholder="To" class="form-control fltr">
</div>
<div class="button-group">
<button type="submit" class="btn sbold blue">Filter</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
</center>
</div>


  <div id="logindiv_progress_1">

<form action="c_order_view.php#tab_1_2" method="get">

<center><div class="filterdiv">

<div class="form-group ">
<label class="control-label">SKU Filter</label>
<input type="text" name="skuword_progress"  placeholder="enter SKU" class="form-control fltr">
</div>

<div class="button-group">
<button type="submit" class="btn sbold blue">Filter</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
</center>
</div>


 <div id="logindiv_progress_2">

<form action="c_order_view.php#tab_1_2" method="get">

<center><div class="filterdiv">

<div class="form-group"> 
<label class="control-label">Shipping Filter Inprogress</label>
<input type="text" name="shippingword_progress" placeholder="enter Shipping" class="form-control fltr">
</div>

<div class="button-group">
<button type="submit" class="btn sbold blue">Filter</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
</center>
</div>
<!-- tab 2 end-->

  
<!-- tab 3 -->
<div id="despatch_1">

<form action="dispatch.php" method="get">

<center><div class="filterdiv">

<div class="form-group ">
<label class="control-label">From</label>
<input type="text" name="from_despatch"  placeholder="From" class="form-control fltr">
</div>
<div class="form-group ">
<label class="control-label">To</label>
<input type="text" name="to_despatch"  placeholder="To" class="form-control fltr">
</div>
<div class="button-group">
<button type="submit" class="btn sbold blue">Filter</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
</center>
</div>


 <div id="despatch_2">

<form action="dispatch.php" method="get">

<center><div class="filterdiv">

<div class="form-group ">
<label class="control-label">SKU Filter</label>
<input type="text" name="skuword_despatch"  placeholder="enter SKU" class="form-control fltr">
</div>

<div class="button-group">
<button type="submit" class="btn sbold blue">Filter</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
</center>
</div>


 
        
        <div id="despatch_3">

<form action="dispatch.php" method="get">

<center><div class="filterdiv">

<div class="form-group">
<label class="control-label">Shipping Filter</label>
<input type="text" name="shippingword_despatch"  placeholder="enter Shipping" class="form-control fltr">
</div>

<div class="button-group">
<button type="submit" class="btn sbold blue">Filter</button>
<button type="button"  onclick="closeTab();" class="btn sbold red">Close</button>
</div>
</div>
</form>
</center>
</div>
<!-- tab 3 end -->     
       
    