<?php 
include 'config.php';
session_start();
	if($_SESSION['password']=="")
	
	{
		echo "<script>window.location='login.php?msg=please login'</script>";
	}
	
?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
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
        <!-- BEGIN LAYOUT FIRST STYLES -->
        <link href="//fonts.googleapis.com/css?family=Oswald:400,300,700" rel="stylesheet" type="text/css" />
        <!-- END LAYOUT FIRST STYLES -->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
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
        <link href="../assets/layouts/layout6/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout6/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-md">
        <!-- BEGIN HEADER -->
        <?php include 'header.php';?>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div class="container-fluid">
            <div class="page-content page-content-popup">
                <div class="page-content-fixed-header">
                    <!-- BEGIN BREADCRUMBS -->
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                       
                        <li>buyer Management</li>
                    </ul>
                    <!-- END BREADCRUMBS -->
                   
                </div>
               <?php include 'menu.php';?>
                <div class="page-fixed-main-content">
                    <!-- BEGIN PAGE BASE CONTENT -->
                   
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Buyer View</span>
                                    </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a href="buyer.php"><button id="sample_editable_1_new" class="btn sbold green"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </button></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="btn-group pull-right">
                                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                      
                                                        <li>
                                                            <a href="exportproject.php">
                                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                
                                                <th >no</th>
                                                <th >Sales Record no</th>
                                                <th>User Id</th>
                                                <th>buyer name</th>
                                                <th>buyer phone</th>
                                                <th>buyer email</th>
                                                <th>buyer address 1</th>
                                                <th>buyer address 2</th>
                                                <th>buyer town/city</th>
                                                <th>buyer county</th>
                                                <th>buyer postcode</th>
                                                <th>buyer country</th>
                                                <th>item number</th>
                                                <th>item title</th>
                                                <th>custom label</th>
                                                <th>quantity</th>
                                                <th>sale price</th>
                                                <th>included vat rate</th>
                                                <th>postage And packing</th>
                                                <th>insurance</th>
                                                <th>cash on delivery fee</th>
                                                <th>total price</th>
                                                <th>payment method</th>
                                                <th>sale date</th>
                                                <th>checkout date</th>
                                                <th>paid on date</th>
                                                <th>dispatch date</th>
                                                <th>invoice date</th>
                                                <th>invoice number</th>
                                                <th>feedback left</th>
                                                <th>feedback received</th>
                                                <th>notes to yours</th>
                                                <th>unique product id</th>
                                                <th>private fiels</th>
                                                <th>product Id type</th>
                                                <th>product Id value</th>
                                                <th>product id value 2</th>
                                                <th>paypal transaction Id</th>
                                                <th>delivery service</th>
                                                <th>cash on delivery option</th>
                                                <th>transaction id</th>
                                                <th>order id</th>
                                                <th>variation id</th>
                                                <th>global shipping programme</th>
                                                <th>global shipping references</th>
                                                <th>click and collect</th>
                                                <th>click And collect reference #</th>
                                                <th>post to address 1</th>
                                                <th>post to address 2</th>
                                                <th>post to city</th>
                                                <th>post to county</th>
                                                <th>post to postcode</th>
                                                <th>post to Coutry</th>
                                                <th>eBay Plus</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
										    <?php
						                       $sn=0;
											   
											 
											   
						                       $sql_01=mysqli_query($conn,"SELECT * FROM `buyer_data`");
						                       while($data_01=mysqli_fetch_assoc($sql_01))
						                       {
							                     $sn++;
							                     $id=$data_01['id'];
							
							                     $name=$data_01['name'];
		                                     ?>
                                            <tr class="odd gradeX">
                                               
                                                <td><?php echo $sn;?></td>
                                                <td><?php echo $data_01['sales_r_no'];?></td>
                                                <td><?php echo $data_01['user_id'];?></td>
                                                <td><?php echo $data_01['buyer_name'];?></td>
                                                <td><?php echo $data_01['buyer_phone'];?></td>
                                                <td><?php echo $data_01['buyer_email'];?></td>
                                                <td><?php echo $data_01['buyer_address_1'];?></td>
                                                <td><?php echo $data_01['buyer_address_2'];?></td>
                                                <td><?php echo $data_01['buyer_town'];?></td>
                                                <td><?php echo $data_01['buyer_county'];?></td>
                                                <td><?php echo $data_01['buyer_postcode'];?></td>
												<td><?php echo $data_01['buyer_country'];?></td>
                                                <td><?php echo $data_01['item_no'];?></td>
                                                <td><?php echo $data_01['item_title'];?></td>
                                                <td><?php echo $data_01['custom_label'];?></td>
                                                <td><?php echo $data_01['quantity'];?></td>
                                                <td><?php echo $data_01['sale_price'];?></td>
                                                <td><?php echo $data_01['included_vat_rate'];?></td>
                                                <td><?php echo $data_01['postage_packing'];?></td>
                                                <td><?php echo $data_01['insurance'];?></td>
                                                <td><?php echo $data_01['cash_on_delivery'];?></td>
                                                <td><?php echo $data_01['total_price'];?></td>
											    <td><?php echo $data_01['payment_method'];?></td>
                                                <td><?php echo $data_01['sale_date'];?></td>
                                                <td><?php echo $data_01['checkout_date'];?></td>
                                                <td><?php echo $data_01['paid_on_date'];?></td>
                                                <td><?php echo $data_01['dispatch_date'];?></td>
                                                <td><?php echo $data_01['invoice_date'];?></td>
                                                <td><?php echo $data_01['invoice_number'];?></td>
                                                <td><?php echo $data_01['feedback_left'];?></td>
                                                <td><?php echo $data_01['feedback_received'];?></td>
                                                <td><?php echo $data_01['notes'];?></td>
												<td><?php echo $data_01['unique_product_id'];?></td>
                                                <td><?php echo $data_01['private_field'];?></td>
                                                <td><?php echo $data_01['productid_type'];?></td>
                                                <td><?php echo $data_01['productid_value'];?></td>
                                                <td><?php echo $data_01['product_value_2'];?></td>
                                                <td><?php echo $data_01['paypal_id'];?></td>
                                                <td><?php echo $data_01['delivery_service'];?></td>
                                                <td><?php echo $data_01['cash_on_delivery_option'];?></td>
                                                <td><?php echo $data_01['transaction_id'];?></td>
                                                <td><?php echo $data_01['order_id'];?></td>
                                                <td><?php echo $data_01['variation'];?></td>
                                                <td><?php echo $data_01['global_shipping_program'];?></td>
                                                <td><?php echo $data_01['global_shipping_references'];?></td>
                                                <td><?php echo $data_01['click_collect'];?></td>
                                                <td><?php echo $data_01['click_collect_reference'];?></td>
                                                <td><?php echo $data_01['post_address_1'];?></td>
                                                <td><?php echo $data_01['post_address_2'];?></td>
                                                <td><?php echo $data_01['post_city'];?></td>
                                                <td><?php echo $data_01['post_county'];?></td>
                                                <td><?php echo $data_01['post_postcode'];?></td>
                                                <td><?php echo $data_01['post_country'];?></td>
                                                <td><?php echo $data_01['ebay_plus'];?></td>
                                               
                                                
												
                                            </tr>
                                            	  <?php  } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- BEGIN FOOTER -->
                <?php include 'footer.php';?>
                <!-- END FOOTER -->
            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN QUICK SIDEBAR -->
       
        <!-- END QUICK SIDEBAR -->
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
        <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
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
        <script src="../assets/layouts/layout6/scripts/layout.min.js" type="text/javascript"></script>
        <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>