<!DOCTYPE html>
<?php
error_reporting(0);
 include 'config.php';
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
}$checkpassworddata = mysqli_query($conn,"select * from `login` where `id`='1'");
	$datapasswordcheck = mysqli_fetch_assoc($checkpassworddata);
if($_SESSION['password']==$$datapasswordcheck){
	
}else{
	echo "<script>window.location='logout.php';</script>";
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
<html lang="en">
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
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
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

    <body class="page-md"> <!--oncontextmenu="return false;" --> 
	<script>//document.onkeydown = function(e) {
  //if(event.keyCode == 123) {
     //return false;
  //}
 // if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     //return false;
  //}
  //if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
    // return false;
  //}
  //if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
     //return false;
 // }
  //if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
  //   return false;
 // }
//}</script>
        <!-- BEGIN HEADER -->
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
                   <?php include 'top.php';?>
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
                            <h1>Order Form Controls
                                <small>Order form controls and more</small>
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
                    <div class="container-fluid">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <?php include 'siteurl.php';?>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <!-- BEGIN SAMPLE FORM PORTLET-->
                                    
                                    <!-- END SAMPLE FORM PORTLET-->
                                    <!-- BEGIN SAMPLE FORM PORTLET-->
                                   
                                    <!-- END SAMPLE FORM PORTLET-->
                                </div>
                                <div class="col-md-12 ">
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
                                                <label class="control-label col-md-3">Excel Name
                                                    
                                                </label>
                                                <div class="col-md-4">
                                                  
                                                <select required type="text" name="exceltype" id="exceltype"  class="form-control">
												<option>select</option>
												
												<option value="amazon">amazon</option>
												<option value="ebay">ebay</option>
												
												</select>
												
                                                <!-- Image preview -->
                                                
                                            </div>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="control-label col-md-3">Company
                                                    
                                                </label>
                                                <div class="col-md-4">
                                                  
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
                                                <label class="control-label col-md-3">Upload Excel File
                                                    
                                                </label>
                                                <div class="col-md-4">
                                                  
                                                <input required type="file" name="file" id="file" onchange="return fileValidation();" class="form-control" />
												
                                                <!-- Image preview -->
                                                
                                            </div>
                                            </div><br>
											<a href="Amazon_Import_1.csv" download><span>demo.csv</span></a>
											
                                        </div>
                                        <div class="form-actions">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn green">Submit</button>
                                                    <a href="#"><button type="button" class="btn grey-salsa btn-outline">Cancel</button></a>
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
var company_id = document.getElementById("company_id").value;
							if(company_id =='' || company_id=='select'){
								return false;
								
							}
	var company_name = document.getElementById("company_name").value;
							if(company_name =='' || company_name=='select'){
								return false;
								
							}
									</script>
                            
                                    <!-- END SAMPLE FORM PORTLET-->
                                    <!-- BEGIN SAMPLE FORM PORTLET-->
                                   
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
        <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="../assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>