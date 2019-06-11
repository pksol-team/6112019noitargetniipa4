<!DOCTYPE html>
<?php include 'config.php';
error_reporting(0);
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
	
}

?>

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
                    <div class="container-fluid">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <?php include 'siteurl.php';?>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                           
                            <div class="row">
                                <div class="col-md-12">
                                <div class="portlet light">
								<ul class="nav nav-tabs">
								<li class="active">
                                            <a href="new.php" id="#tab_1_1" data-toggle="tab"><b>New</b></a>
                                        </li>
										
										 <li>
                                            <a href="c_order_view.php#tab_1_3" ><b> In Progress </b></a>
                                        </li>
										 <li>
                                            <a href="c_order_view.php#tab_1_2" ><b> Despatched </b></a>
                                        </li>
                                        <li >
                                            <a href="c_order_view.php#tab_1_1" > <b>All </b></a>
                                        </li>
                                       
                                    </ul>
                                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
									<div class="tab-content">
									 <div class="tab-pane fade active in" id="tab_1_1">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a href="c_order.php"><button id="sample_editable_1_new" class="btn sbold green"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </button></a>
                                                </div> 
												<div class="btn-group">
                                                   <select class="form-control custom-select" id="print_type" onchange="FormStuff();">
												   <option >Tools</option>
												   <option value="jobsheet">Print Job-Sheet</option>
												   <option value="flag">Add Flag</option>
												   <option value="invoice">Print Invoice</option>
												   <option value="picking">Print Picking List</option>
												   <option value="export">Export</option>
												   <option value="status">Change Status</option>
												   <option value="makedespatched">Create SheepMent</option>
												   <option value="returnsform">Returns Form</option>
												   
												   </select>
                                                </div>
												<div class="btn-group">
                                                  <button id="sample_editable_1_new" onclick="document.getElementById('form_sample_2').submit()" class="btn sbold green"> OK
                                                      
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                               <!-- <div class="btn-group pull-right">
                                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                      
                                                        <li>
                                                            <a href="invoice.php">
                                                                <i class="fa fa-file-excel-o"></i>Print Invoice </a>
                                                        </li>  <li>
                                                            <a href="picking_list.php">
                                                                <i class="fa fa-file-excel-o"></i> Print Picking </a>
                                                        </li>
                                                    </ul>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
									<script>
									
									</script>
									<form  method="post" id="form_sample_2" name="print" action="/">
									<div id="selectstatus"></div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                              <th>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>  
                                                <th >no</th>
                                                <th >Company</th>
                                                <th >order Id</th>
                                                <th >User Id</th>
                                                <th >Item Title</th>
                                                <th >Variation</th>
                                                <th ><div class="">Status</div></th>
                                                <th ><div class="">Flag</div></th>
												 <th ><div class="statuss">-</div></th>
                                                <th >Tracking No</th>
                                                <th >sku</th>
                                                <th >Sold For</th>
                                                <th >Total</th>
                                                <th >Shipping Method</th>
                                              
                                            </tr>
                                        </thead>
                                        <tbody>
										    <?php
						                       $sn=0;
											   
						                       $sql_01=mysqli_query($conn,"SELECT * FROM `order_data` where status='new'");
						                       while($data_01=mysqli_fetch_assoc($sql_01))
						                       {
							                     $sn++;
							                     $id=$data_01['id'];
							
							                     $name=$data_01['name'];
		                                     ?>
                                            <tr class="odd gradeX">
                                               <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" name="company_order_id[]" value="<?php echo $id;?>" class="checkboxes"  />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><?php echo $sn;?></td>
												<?php 
												
												$c_id = $data_01['company_id'];
												$c_name_data = mysqli_query($conn,"select * from `company` where `id`='$c_id'");
												$data_c_name = mysqli_fetch_assoc($c_name_data);
												?>
                                                <td><img src="images/<?php echo $data_c_name['file'];?>" title="<?php echo $data_c_name['name'];?>" width="60px" height="40px"></td>
                                                <td><?php echo $data_01['sales_r_no'];?></td>
                                                <td><?php echo $data_01['user_id'];?></td>
												
                                                  <td class=""><div class="tooltip1"><?php echo  substr($data_01['item_title'], 0, 25);?>
												<span class="tooltiptext1"><?php echo  $data_01['item_title'];?></span></div>
												</td>
												
                                                
												<td >
												<div class="tooltip1"><?php echo  substr($data_01['variation'], 0, 25);?>
												<span class="tooltiptext1"><?php echo  $data_01['variation'];?></span></div>
												</td>
												 <td> <?php if($data_01['status']=='new') { ?>
											   <button type="button" class="label label-info">New</button>
											   <?php } elseif($data_01['status']=='inprogress') { ?>
											    <button type="button" class="label label-warning">In progress</button>
											   <?php } elseif($data_01['status']=='shipped' )  { ?>
											   <button type="button" class="label label-success">Shipped</button>
											   <?php } elseif($data_01['status']=='close') { ?>
											    <button type="button" class="label label-danger">Close</button>
											   <?php } ?></td>
											    <td> <?php if($data_01['flag']=='holdorder') { ?>
											    <button type="button" class="label label-warning"> <span  class="icon-flag"></span>hold-order</button>
											   <?php }elseif($data_01['flag']=='urgent'){ ?>
											    <button type="button" class="label label-danger"> <span  class="icon-flag"></span>urgent</button>
											   <?php } ?></td>
												 <td> 
											  
																	<div class="btn-group ">
																	
																	
																	<div class="form-popup" id="myForm<?php echo $sn;?>"><select type="text" name="user[]" class="form-control" placeholder="">
																			<option>Enter User Here</option>
																			<?php
																			$user_data = mysqli_query($conn,"select * from `user`");
																			while($data_user = mysqli_fetch_assoc($user_data))
																			{
																			?>
																			<option value="<?php echo $data_user['uid'];?>"><?php echo $data_user['uname'];?></option>
																			<?php } ?>
																			</select><span>First Check The Checkbox!!!</span>
																			  <button type="button" class="btn cancel" onclick="closeForm<?php echo $sn;?>()">Close</button>
																				</div>
																	
                                                                        <button onclick="openForm<?php echo $sn;?>()" type="button" class="btn green open-button" ><i class="fa fa-user"></i></button>
                                                                        <script>
function openForm<?php echo $sn;?>() {
  document.getElementById("myForm<?php echo $sn;?>").style.display = "block";
  document.print.action = "adduser.php";
}

function closeForm<?php echo $sn;?>() {
  document.getElementById("myForm<?php echo $sn;?>").style.display = "none";
}
</script>
<?php if(!empty($data_01['note'])){?>
																	<div class="btn-group">
                                                                        <a class="btn red" href="javascript:;" data-toggle="dropdown" aria-expanded="true">
                                                                            <i class="fa fa-edit"></i>
                                                                            
                                                                        </a>
                                                                        <ul class="dropdown-menu">
                                                                            <li><input type="text" name="note[]" onkeyup="Note()" class="form-control" placeholder="Enter or change Note Here"><span style="text-decoration:underline; margin-top:-5px;">First Check The Checkbox!!!</span>
                                                                                <?php if(empty($data_01['note'])){?>
																				<?php } else {?>
																				<p  style="margin-top:5px;">
																			<?php echo $data_01['note'];?>
																				</p><?php } ?>
                                                                            </li>
                                                                            
                                                                        </ul>
                                                                    </div><?php } else { ?>
																	<a href="javascript:;" class="btn btn-icon-only red1">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
																	<?php } ?>
																	<?php if($data_01['status']=='shipped') { ?>
																	<a class="btn btn-icon-only green"><i class="  fa fa-truck "></i></a>
																	<?php } else{ ?>
																	<a class="btn btn-icon-only yellow"><i class="  fa fa-truck "></i></a>
																	<?php } ?>
																	<br>
																	<?php if(!empty($data_01['user'])) { ?>
																	<button type="button" class="label label-warning"> <span  class="icon-user b11"></span>&nbsp;<span class="b11"><?php echo $data_01['user'];?></span></button>
																	<?php } ?>
																	
															 
                                                                    </div>
																	
																	
																	</td>
                                                <td>-</td>
                                                <td><?php echo $data_01['sku'];?></td>
                                               <td>-</td>
                                               <td>-</td>
                                               <td>-</td>
                                              
                                            </tr>
                                            	  <?php } ?>

                                        </tbody>
										
                                    </table>
									
									</form>
									
									 <link href="custom.css" rel="stylesheet" type="text/css" />
									<style>
									
									</style>
									<!-- tab 1 end--></div>
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
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>