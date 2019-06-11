 <?php
 error_reporting(0);
session_start();
include 'config.php';
 if($_SESSION['password']==''){
	 echo "<script>window.location='login.php'</script>";
 }
 $company_name=$_GET['company_name'];
 ?>
 <div id="std_div"><label class="control-label col-md-4">Channel
                                                    
                                                </label>
                                                <div class="col-md-6">
                                                  
                                                <select required type="text" name="channel" id="company_name"  class="form-control">
												<option>select</option>
												<?php
												$data = mysqli_query($conn,"select * from `company_data` where `company_id`='$company_name'");
												while($tada = mysqli_fetch_assoc($data))
												{
													echo $channel_id = $tada['channel_name'];
												?>
												<?php 
												$channel_data  = mysqli_query($conn,"select * from `channel` where `id`='$channel_id'");
												$data_channel = mysqli_fetch_assoc($channel_data);
												
												?>
												<option value="<?php echo $data_channel['id'];?>"><?php echo $data_channel['name'];?></option>
												<?php echo $channel_id; ?>
												<?php } ?>
												</select>
												
                                                <!-- Image preview -->
                                                
                                            </div> </div>