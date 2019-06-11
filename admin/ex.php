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


	
	
	  
                        
							$sql_01=mysqli_query($conn,"SELECT * FROM `order_data` where `status`='shipped'  AND `dispatch_date`='2019-03-07' GROUP BY `id`,`sales_r_no`,`company_id`,`sale_date` ORDER BY id asc");
						 while($data_01=mysqli_fetch_assoc($sql_01))
						 { 	
					 $sales_r_no = $data_01['sales_r_no'];
							 $header_data="$sales_r_no***********";
//fwrite($file, $header_data.PHP_EOL);
fputcsv($file,explode('*',$header_data));
						
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