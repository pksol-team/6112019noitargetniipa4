<?php
 include 'config.php';
 error_reporting(0);
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
}

?>
<!DOCTYPE html>
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

    <body class="page-container-bg-solid page-md">
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
                            <h1>Company Datatables
                                <small>managed datatable</small>
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
                                <div class="col-md-12">
								
                                <div class="portlet light">
								
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a href="company.php"><button id="sample_editable_1_new" class="btn sbold green"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </button></a>
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>       
                                            
                                      
                                   
									
									<div id="selectstatus"></div>
                                   <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Address 1</th>
                                                <th>Address 2</th>
                                                <th>City</th>
                                                <th>County</th>
                                                <th>Postal Code</th>
                                                <th>Country</th>
                                                <th>URL</th>
                                                <th>VAT</th>
                                                <th>channel Name</th>
                                                <th>From</th>
                                                <th>To</th>
                                               
                                                
                                                <th>Edit</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										    <?php
						                       $sn=0;
						                       $sql_01=mysqli_query($conn,"SELECT * FROM `company`");
						                       while($data_01=mysqli_fetch_assoc($sql_01))
						                       {
							                     $sn++;
							                      $id=$data_01['id'];
							
							                     $name=$data_01['name'];
							                    
							                     $vat=$data_01['vat'];
							                     $from=$data_01['from'];
							                     $to=$data_01['to'];
												 
		                                     ?>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <?php echo $sn;?> </td>
                                                
                                                <td>
                                                   <?php echo $name;?>
                                                </td> 
												<td>
                                                   <?php echo $data_01['address_1'];?>
                                                </td>
												<td>
                                                   <?php echo $data_01['address_2'];?>
                                                </td> 
												<td>
                                                   <?php echo $data_01['city'];?>
                                                </td> 
												 
												<td>
                                                   <?php echo $data_01['county'];?>
                                                </td> 
												<td>
                                                   <?php echo $data_01['postalcode'];?>
                                                </td> 
												<td>
                                                   <?php echo $data_01['country'];?>
                                                </td>  
												<td>
                                                   <?php echo $data_01['url'];?>
                                                </td> 
												<td>
                                                   <?php echo $vat;?>
                                                </td>
                                               <td>
                                                  <?php
												   $emps=null;
												  $company_data = mysqli_query($conn,"select * from `company_data` where `company_id`='$id'");
												  while($data_company = mysqli_fetch_assoc($company_data)){
													 $channelid = $data_company['channel_name'];
													
													 $channel_data = mysqli_query($conn, "SELECT *  FROM `channel` WHERE `id` = '$channelid'");
												
												  $data_channel = mysqli_fetch_assoc($channel_data);
													  $emps[] = $data_channel['name'];
													 
													 if(count($emps)>1)
												{
													echo $c_name = implode(",",$emps); 
												}else{
													echo $c_name =$data_channel['name'];
												}
												  }
												 ?>
                                                </td>
                                               <td>
                                                   <?php echo $from;?>
                                                </td>
                                                 <td>
                                                   <?php echo $to;?>
                                                </td>
                                                
												<td>
                                                   <a href="companyedit.php?id=<?php echo $id;?>"> <button id="sample_editable_1_new" class="btn sbold yellow"> Edit
                                                      
                                                    </button></a>
                                                </td>
												
                                            </tr>
                                            	  <?php  } ?>
                                        </tbody>
                                    </table>
									
									<style>
									.itemtitle {
									width:160px;	
									height:80px;
									overflow:auto;	
									}
									.statuss{
										width:98px;
										max-width:150px;
									}
									.selectst{
										width:230px;
									}
									
									.custom-select {
  position: relative;
  font-family: Arial;
}
									
									</style>
									<!-- tab 1 end-->
                                    
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
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>