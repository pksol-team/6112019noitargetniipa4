<?php

// error_reporting(0);
include 'config.php';

$print_ids = [];

$company_id = $_POST['company_name'];

$exceltype = $_POST['exceltype'];
$channel = $_POST['channel'];
$channeldata = mysqli_query($conn,"select * from `channel` where `id`='$channel'");

$datachannel = mysqli_fetch_assoc($channeldata);
    
    $fileName = $_FILES["file"]["tmp_name"];
    
    if ($_FILES["file"]["size"] > 0) {      

        $file = fopen($fileName, "r");
        //while (($data = fgetcsv($handle, 0, ";","'")) !== FALSE)
        while (($column = fgetcsv($file, 10000, "," )) !== FALSE) {
			if($datachannel['name']=='eBay') {
	
				//uploading eBay data	
	
				$data0=mysqli_real_escape_string($conn,preg_replace('/\s+/', '',$column[0]));
				$data1=mysqli_real_escape_string($conn,$column[1]);
				$data2=mysqli_real_escape_string($conn,$column[2]);
				$data3=mysqli_real_escape_string($conn,$column[3]);
				$data4=mysqli_real_escape_string($conn,$column[4]);
				$data5=mysqli_real_escape_string($conn,$column[5]);
				$data6=mysqli_real_escape_string($conn,$column[6]);
				$data7=mysqli_real_escape_string($conn,$column[7]);
				$data8=mysqli_real_escape_string($conn,$column[8]);
				
				$postcode1 = str_replace(' ', '', mysqli_real_escape_string($conn,$column[9]));

				$postcode2 = substr($postcode1, -3);

				$postcode = str_replace($postcode2, ' '.$postcode2, $postcode1);

				$data9 =  $postcode; // postcode 

				$data10=mysqli_real_escape_string($conn,$column[10]);
				$data11=mysqli_real_escape_string($conn,number_format($column[11],0));
				$data12=mysqli_real_escape_string($conn,$column[12]);
				
				$data13 = substr(mysqli_real_escape_string($conn,$column[13]), 2); //sku-customelabel

				$data14=mysqli_real_escape_string($conn,$column[14]);//qty

				 $data15 =mysqli_real_escape_string($conn,substr(preg_replace('/\s+/', '',$column[15]),1));//price

				$data16=mysqli_real_escape_string($conn,$column[16]);
				$data17=mysqli_real_escape_string($conn,substr($column[17],1));//postage
				$data18=mysqli_real_escape_string($conn,$column[18]);
				$data19=mysqli_real_escape_string($conn,$column[19]);
				$data20=mysqli_real_escape_string($conn,$column[20]);
				$data21=mysqli_real_escape_string($conn,$column[21]);
				$data22=mysqli_real_escape_string($conn,date('Y-m-d', strtotime($column[22])));
				$data23=mysqli_real_escape_string($conn,date('Y-m-d', strtotime($column[23])));
				$data24=mysqli_real_escape_string($conn,date('Y-m-d', strtotime($column[24])));
				$data25=mysqli_real_escape_string($conn,date('Y-m-d', strtotime($column[25])));
				$data26=mysqli_real_escape_string($conn,date('Y-m-d', strtotime($column[26])));
				$data27=mysqli_real_escape_string($conn,$column[27]);
				$data28=mysqli_real_escape_string($conn,$column[28]);
				$data29=mysqli_real_escape_string($conn,$column[29]);
				$data30=mysqli_real_escape_string($conn,$column[30]);
				$data31=mysqli_real_escape_string($conn,$column[31]);
				$data32=mysqli_real_escape_string($conn,$column[32]);
				$data33=mysqli_real_escape_string($conn,$column[33]);
				$data34=mysqli_real_escape_string($conn,$column[34]);
				$data35=mysqli_real_escape_string($conn,$column[35]);
				$data36=mysqli_real_escape_string($conn,$column[36]);
				$data37=mysqli_real_escape_string($conn,$column[37]);
				$data38=mysqli_real_escape_string($conn,$column[38]);
				$data39=mysqli_real_escape_string($conn,$column[39]);
				 //$data40=$column[40];//order_id
				 $data41=mysqli_real_escape_string($conn,$column[41]);
				$data42=mysqli_real_escape_string($conn,$column[42]);
				$data43=mysqli_real_escape_string($conn,$column[43]);
				$data44=mysqli_real_escape_string($conn,$column[44]);
				$data45=mysqli_real_escape_string($conn,$column[45]);
				$data46=mysqli_real_escape_string($conn,$column[46]);
				$data47=mysqli_real_escape_string($conn,$column[47]);
				$data48=mysqli_real_escape_string($conn,$column[48]);
				$data49=mysqli_real_escape_string($conn,$column[49]);
				$data50=mysqli_real_escape_string($conn,$column[50]);
				$data51=mysqli_real_escape_string($conn,$column[51]);
				$data52=mysqli_real_escape_string($conn,$column[52]);
				$data53=mysqli_real_escape_string($conn,$column[53]);
				$data54=mysqli_real_escape_string($conn,$column[54]);
				
				if($data0=='' or $data13=='stom Label') {

				} else {
					
						// first upload both file okay


						// $check_o_id = mysqli_query($conn, "select * from `order_data` where `sales_r_no`='$data0' AND buyer_postcode = '".$data9."'  AND company_id = '".$company_id."' AND sku = '".$data13."' ");


						$company_data_query = mysqli_query($conn,"select * from `company` where `id`='$company_id'");

						$company_data = mysqli_fetch_assoc($company_data_query);


						$company_code = substr((explode('-', $company_data['name']))[1], 1, 2);
						
						$sales_r_no_with_company = $company_code.'-'.$data0;

						$check_o_id = mysqli_query($conn, "select * from `order_data` where `sales_r_no`='$sales_r_no_with_company' AND company_id = '".$company_id."' AND sku2 = '".$data13."' ");
						

						$data_ceck_o = mysqli_num_rows($check_o_id);


						echo "select * from `order_data` where `sales_r_no`='$sales_r_no_with_company' AND company_id = '".$company_id."' AND 
						sku = '".$data13."' ";
						
						if($data_ceck_o == 0 && $data0 != '' && $data1 != '' && $column[22] != '' ) {
							
							echo 'insert record_id-'.$data0.'-company_id-'.$company_id;
							echo '<br><br>';

							

							mysqli_query($conn,"INSERT INTO `order_data`(`company_id`,`channel_id`, `sales_r_no`, `user_id`, `buyer_name`, `buyer_phone`, `buyer_email`, `buyer_address_1`, `buyer_address_2`, `buyer_town`, `buyer_county`, `buyer_postcode`, `buyer_country`, `item_no`, `item_title`, `sku`, `quantity`, `sale_price`, `included_vat_rate`, `postage_packing`, `insurance`, `cash_on_delivery`, `total_price`, `payment_method`, `sale_date`, `checkout_date`, `paid_on_date`, `dispatch_date`, `invoice_date`, `invoice_number`, `feedback_left`, `feedback_received`, `notes`, `unique_product_id`, `private_field`, `productid_type`, `productid_value`, `product_value_2`, `paypal_id`, `delivery_service`, `cash_on_delivery_option`, `transaction_id`, `variation`, `global_shipping_program`, `global_shipping_references`, `click_collect`, `click_collect_reference`, `post_address_1`, `post_address_2`, `post_city`, `post_county`, `post_postcode`, `post_country`, `ebay_plus`,`status`,`mearge`,`tacking_no`,`shipping_cost`, `sku2`) VALUES ('$company_id','$channel','$sales_r_no_with_company','$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8','$data9','$data10','$data11','$data12','$data13','$data14','$data15','$data16','$data17','$data18','$data19','$data20','$data21','$data22','$data23','$data24','$data25','$data26','$data27','$data28','$data29','$data30','$data31','$data32','$data33','$data34','$data35','$data36','$data37','$data38','$data39','$data41','$data42','$data43','$data44','$data45','$data46','$data47','$data48','$data49','$data50','$data51','$data52','new','','$data53','$data54' ,'$data13')");

							$id = mysqli_insert_id($conn);

							if($data4 != '') {
								array_push($print_ids, $id);
							}

							if(!empty($data2) and empty($data12)) {
								mysqli_query($conn,"update `order_data` set `quantity`='' where `id`='$id'"); 
							}

							$order_id11 = mysqli_insert_id($conn);

						} else {
							
							echo 'skip record_id-'.$data0.'-company_id-'.$company_id;
							echo '<br><br>';

						}
					}
				} else { 
			
				//uploading amazon data	
					
					
					
				$order_id=mysqli_real_escape_string($conn,$column[0]);
				$order_item_id=mysqli_real_escape_string($conn,number_format($column[1],0)); //item_no
				$purchase_date=mysqli_real_escape_string($conn,date('Y-m-d', strtotime($column[2])));//paid_on_date
				$payments_date=mysqli_real_escape_string($conn,date('Y-m-d', strtotime($column[3])));//sale_date
				$reporting_date=mysqli_real_escape_string($conn,date('Y-m-d', strtotime($column[4])));
				$promise_date=mysqli_real_escape_string($conn,date('Y-m-d', strtotime($column[5])));
				$days_past_promise=mysqli_real_escape_string($conn,$column[6]);
				$buyer_email=mysqli_real_escape_string($conn,$column[7]);
				$buyer_name=mysqli_real_escape_string($conn,$column[8]);

				$buyer_number=mysqli_real_escape_string($conn,$column[9]);//buyer_phone
				$sku=mysqli_real_escape_string($conn,$column[10]);
				$product_name=mysqli_real_escape_string($conn,$column[11]);//item_title
				$quantity_purchased=mysqli_real_escape_string($conn,$column[12]);//
				$quantity_shipped=mysqli_real_escape_string($conn,$column[13]);
				$quantity_to_ship=mysqli_real_escape_string($conn,$column[14]);//quantity
				$ship_service_level=mysqli_real_escape_string($conn,$column[15]);//delivery_service
				$recipient_name=mysqli_real_escape_string($conn,$column[16]);
				$ship_address =  mysqli_real_escape_string($conn,$column[17]);//buyer_address_1
				$ship_address2 =  mysqli_real_escape_string($conn,$column[18].$column[19]);//buyer_address_2

				$ship_city=mysqli_real_escape_string($conn,$column[20]);//buyer_town
				$ship_state=mysqli_real_escape_string($conn,$column[21]);//buyer_county
				$ship_postal_code=mysqli_real_escape_string($conn,$column[22]);//buyer_postcode
				$ship_country=mysqli_real_escape_string($conn,$column[23]);//ship_country
				$is_business_order=mysqli_real_escape_string($conn,$column[24]);
				$purchase_order_no=mysqli_real_escape_string($conn,$column[25]);
				$price_designation=mysqli_real_escape_string($conn,$column[26]);
				$saleprice =mysqli_real_escape_string($conn,$column[27]);
				$trackingno =mysqli_real_escape_string($conn,$column[28]);
				$postage_packing =mysqli_real_escape_string($conn,$column[29]);
				
				if($order_id=='order-id'){}
				else{

					$check_o_id = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$order_id'");
					$data_ceck_o = mysqli_fetch_assoc($check_o_id);  
					if($data_ceck_o['mearge']=='hide') {  } else {	
						
						 
						if($data_ceck_o['sales_r_no'] == $order_id) {
							
							mysqli_query($conn,"INSERT INTO `order_data`( `company_id`,`channel_id`, `sales_r_no`, `item_no`, `paid_on_date`, `sale_date`, `reporting_date`, `promise_date`, `days_past_promise`, `sku`, `item_title`, `quantity_purchased`, `quantity_shipped`, `quantity`, `delivery_service`, `recipient_name`,`is_business_order`, `purchase_order_no`, `price_designation`,`status`,`sale_price`,`tacking_no`,`postage_packing`) VALUES ('$company_id','$channel','$order_id','$order_item_id','$purchase_date','$payments_date','$reporting_date','$promise_date','$days_past_promise','$sku','$product_name','$quantity_purchased','$quantity_shipped','$quantity_to_ship','$ship_service_level','$recipient_name','$is_business_order','$purchase_order_no','$price_designation','new','$saleprice','$trackingno','$postage_packing')");
						
						} else {
						
							mysqli_query($conn,"INSERT INTO `order_data`( `company_id`,`channel_id`, `sales_r_no`, `item_no`, `paid_on_date`, `sale_date`, `reporting_date`, `promise_date`, `days_past_promise`, `buyer_email`, `buyer_name`, `buyer_phone`, `sku`, `item_title`, `quantity_purchased`, `quantity_shipped`, `quantity`, `delivery_service`, `recipient_name`,`buyer_address_1`, `buyer_address_2`, `buyer_town`, `buyer_county`, `buyer_postcode`, `buyer_country`, `is_business_order`, `purchase_order_no`, `price_designation`,`status`,`sale_price`,`tacking_no`,`postage_packing`) VALUES ('$company_id','$channel','$order_id','$order_item_id','$purchase_date','$payments_date','$reporting_date','$promise_date','$days_past_promise','$buyer_email','$buyer_name','$buyer_number','$sku','$product_name','$quantity_purchased','$quantity_shipped','$quantity_to_ship','$ship_service_level','$recipient_name','$ship_address','$ship_address2','$ship_city','$ship_state','$ship_postal_code','$ship_country','$is_business_order','$purchase_order_no','$price_designation','new','$saleprice','$trackingno','$postage_packing')");
						}
					
					}
				}
			}
        }
	}

// 	// Request to generate pdf
// 	$ch = curl_init();

// 	curl_setopt($ch, CURLOPT_URL, "https://shopping-hub.in/orders/admin/invoicedom.php?type=curl");
// 	curl_setopt($ch, CURLOPT_POST, 1);

// 	// In real life you should use something like:
// 	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('company_order_id' => $print_ids)));

// 	// Receive server response ...
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// 	$server_output = curl_exec($ch);

// 	curl_close ($ch);





// 	// request to send mails
// 	$ch = curl_init();

// 	curl_setopt($ch, CURLOPT_URL, "https://shopping-hub.in/orders/admin/mail_it.php?type=curl");
// 	curl_setopt($ch, CURLOPT_POST, 1);

// 	// In real life you should use something like:
// 	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('include_ids' => $print_ids)));

// 	// Receive server response ...
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// 	$server_output = curl_exec($ch);
	
// 	curl_close ($ch);
	
	
	
	


	// For merge task
	$unique_sql = "
	SELECT
		* 
	FROM
		order_data 
	WHERE
		buyer_address_1 IN ( SELECT * FROM ( SELECT buyer_address_1 FROM order_data WHERE STATUS = 'new' AND mearge <> 'hide' GROUP BY buyer_address_1 HAVING COUNT( buyer_address_1 ) > 1 ) AS a ) 
		AND buyer_name IN ( SELECT * FROM ( SELECT buyer_name FROM order_data WHERE STATUS = 'new' AND mearge <> 'hide' GROUP BY buyer_name HAVING COUNT( buyer_name ) > 1 ) AS a ) 
		AND buyer_postcode IN ( SELECT * FROM ( SELECT buyer_postcode FROM order_data WHERE STATUS = 'new' AND mearge <> 'hide' GROUP BY buyer_postcode HAVING COUNT( buyer_postcode ) > 1 ) AS a ) 
		AND buyer_postcode <> 'WS13 8UR' 

		AND buyer_address_1 <> '' 
		AND buyer_name <> '' 
		AND buyer_postcode <> '' 

	GROUP BY
		buyer_postcode
	";

	$unique_records = mysqli_query($conn, $unique_sql);


	while($unique_row = mysqli_fetch_assoc($unique_records)) {

		$buyer_name = $unique_row['buyer_name'];
		$buyer_address = $unique_row['buyer_address_1'];
		$buyer_postcode = $unique_row['buyer_postcode'];
		$status = $unique_row['status'];

		$each_unique_sql = "
			SELECT
				GROUP_CONCAT(id) as ids
			FROM
				order_data 
				WHERE
				buyer_name = '".$buyer_name."'
				AND 
				buyer_address_1 = '".addslashes($buyer_address)."'
				AND 
				buyer_postcode = '".$buyer_postcode."'
				AND
				mearge <> 'hide' 
				AND
				status = 'new'
		";

		$each_unique = mysqli_query($conn, $each_unique_sql);

		$ids = explode(',', mysqli_fetch_assoc($each_unique)['ids']);

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://shopping-hub.in/orders/admin/meargesubmit.php?status=".$status."&type=curl");
		curl_setopt($ch, CURLOPT_POST, 1);

		// In real life you should use something like:
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array('company_order_id' => $ids)));

		// Receive server response ...
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec($ch);

		curl_close ($ch);

	}	

    echo "<script>window.location='../c_order_view.php'</script>";


?>