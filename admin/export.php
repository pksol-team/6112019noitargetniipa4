<?php
include 'config.php';
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
}
 $company_order_id = $_POST['company_order_id'];

$file=fopen("Export.csv","w+") or exit("Unable to open file!");





/********* Excel Header *********/
   
$header = "Order Id,Buyer Full Name,Buyer Phone Number,Buyer Email,Buyer Address 1,Buyer Address 2,Buyer Town/City,Buyer County,Buyer PostCode,Buyer Country,SKU,QTY";
fputcsv($file,explode(',',$header));

/*********  Header  end *********/

/********* Excel Data *********/


	
	
	  foreach($company_order_id as $company_order_id1){
                         $sql_011=mysqli_query($conn,"select * from `order_data` where `id`='$company_order_id1'");
						 $data_011=mysqli_fetch_assoc($sql_011);
						 
							 $order_id= $data_011['sales_r_no'];
							 $company_id = $data_011['company_id'];
							 $status = $data_011['status'];
							 $sale_date = $data_011['sale_date'];
							$sql_01=mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$order_id' AND `company_id`='$company_id' AND `status`='$status' AND `sale_date`='$sale_date'  ORDER BY `id` ASC");
						 while($data_01=mysqli_fetch_assoc($sql_01))
						 { 	
							 $sales_r_no =$data_01['sales_r_no'];
							$buyer_name =$data_01['buyer_name'];
							$buyer_phone=$data_01['buyer_phone'];
							$buyer_email=$data_01['buyer_email'];
							$buyer_address_1=$data_01['buyer_address_1'];
							$buyer_address_2=$data_01['buyer_address_2'];
							$quantity=$data_01['quantity'];
							$item_title=$data_01['item_title'];
							
							
							 if(empty($data_01['custom_label'])){
								 $sku =$data_01['sku'];
								 }else{
								$sku =$data_01['custom_label'];
									 } 
									 if(empty($data_01['buyer_town'])){
								 $buyer_town =$data_01['ship_city'];
								 }else{
								$buyer_town =$data_01['buyer_town'];
									 }
							
									 $county=$data_01['buyer_county'];
									 
									 if(empty($data_01['buyer_country'])){
								 $buyer_country=$data_01['ship_country'];
								 }else{
									 $buyer_country=$data_01['buyer_country'];
									 }
									 
									 
									 if(empty($data_01['ship_postal_code'])){
								 $postalcode=$data_01['buyer_postcode'];
								 }else{
									 $postalcode=$data_01['ship_postal_code'];
									 }
									if($data_01['mearge']=='hide'){}else{ 
							if($sku=='' AND $item_title==''){
								$qdata = mysqli_query($conn,"select sum(quantity) as quantity1 from `order_data` where `sales_r_no`='$sales_r_no' and `status`='$status'  and `sale_date`='$sale_date' ");
													$dataQ = mysqli_fetch_assoc($qdata);
													$quantity1 = $dataQ['quantity1'];
													
								$header_data="$sales_r_no*$buyer_name*$buyer_phone*$buyer_email*$buyer_address_1*$buyer_address_2*$buyer_town*$county*".strtoupper($postalcode)."*$buyer_country*$sku*$quantity1";
							}else{
								
							if($sales_r_no==$last_order_no)
							{
								if($sku==''){ 
									
								}else{
								$header_data="$sales_r_no* * * * * * * * * *$sku*$quantity";
								}								

						 }else{
							 if($sku==''){
									
								}else{
									
									$qdata = mysqli_query($conn,"select sum(quantity) as quantity1 from `order_data` where `sales_r_no`='$sales_r_no' and `status`='$status'  and `sale_date`='$sale_date' ");
													$dataQ = mysqli_fetch_assoc($qdata);
													$quantity1 = $dataQ['quantity1'];
								//$header_data1="$sales_r_no*$quantity1";
								//fputcsv($file,explode('*',$header_data1));
								$header_data="$sales_r_no*$buyer_name*$buyer_phone*$buyer_email*$buyer_address_1*$buyer_address_2*$buyer_town*$county*".strtoupper($postalcode)."*$buyer_country*$sku*$quantity";
								}	
							 
						 }
						 
							}
						 }
						 $last_order_no = $sales_r_no;
//fwrite($file, $header_data.PHP_EOL);
fputcsv($file,explode('*',$header_data));
						
						 }
							
						 
						 }
						
						
/*********  Excel  Data end *********/

fclose($file);
header('Content-Disposition: attachment; filename=Export.csv');
header('Content-type: application/xls');
readfile("Export.csv");
unlink("Export.csv");	

exit;
?>
<?php 
echo "<script>window.location.href='userview.php'</script>";
?>