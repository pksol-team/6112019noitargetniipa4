<!DOCTYPE html>
<?php
error_reporting(0);
include 'config.php';
session_start();
if($_SESSION['password']==''){
	echo "<script>window.location='login.php'</script>";
}
$company_order_id = $_POST['company_order_id'];


foreach($company_order_id as $company_order_id1){
	
$dompdf=null;
$html = null;
//

//start main div
$html .='<body style="font-family: Calibri, sans-serif;"><center><div style="display:block; width:21.90cm; height:auto;  ">';
//start header
$html .='<div style="border-bottom:2px solid #bbb; margin-left:5px; margin-right:5px;display:block; height:50px; width:100%; ">';
$html .='<center><h2>Invoice</h2></center>';

$html .='</div>';

$order_data = mysqli_query($conn,"select * from `order_data` where `id`='$company_order_id1'");
$data_order = mysqli_fetch_assoc($order_data);
$company_id = $data_order['company_id'];
$order_no = $data_order['sales_r_no'];
$status = $data_order['status'];
$sale_date = $data_order['sale_date'];
$company_data  = mysqli_query($conn,"select * from `company` where `id`='$company_id'");
$data_company = mysqli_fetch_assoc($company_data);
$companyaddress = $data_company['address'];
$companyname = $data_company['name'];
$vat = $data_company['vat'];

if(!empty($data_company['address_1'])){
$companyaddress .=''.$data_company['address_1'].'<br>';	
}
if(!empty($data_company['address_2'])){
$companyaddress .=''.$data_company['address_2'].'<br>';	
}
if(!empty($data_company['city'])){
$companyaddress .=''.$data_company['city'].'<br>';	
}
if(!empty($data_company['county'])){
$companyaddress .=''.$data_company['county'].' '.'-'.' ';	
}
if(!empty($data_company['postalcode'])){
$companyaddress .=''.$data_company['postalcode'].'<br>';	
}
if(!empty($data_company['country'])){
$companyaddress .=''.$data_company['country'].'<br>';	
}

//start address company
$html .='<div style="width:100%; height:120px; display:block; margin:25px 5px 5px 5px;">
<div style="width:50%; display:block; height:120px; float:left;">

</div>

<div style="width:50%; display:block; height:120px; float:right; border-radius:1px;">
<text style="    margin: 5px 2px 2px 2px;
    text-align: right;
    word-wrap: break-word;
    width: 303px;
    float: right;
    height: 101px;">'.'<b>'.ucfirst($companyname).'</b><br>'.$companyaddress.'<br><b>VAT : </b>'.' '.$vat.'</text>
</div>
</div>';
$companyaddress = null;
//start order address
$html .='<div style="width:100%; height:120px; display:block; margin:15px 5px 5px 5px;">


<div style="width:50%; display:block; height:120px; float:left;  border-radius:1px;">
<text style="margin:5px 2px 2px 2px; float:left; text-align:left; word-wrap: break-word; width:170px; height:80px;">';
if(!empty($data_order['buyer_name'])){
$html .='<b>'.ucfirst($data_order['buyer_name']).'</b><br>';	
}
if(!empty($data_order['buyer_address_1'])){
$html .=''.$data_order['buyer_address_1'].'<br>';	
}
if(!empty($data_order['buyer_address_2'])){
$html .=''.$data_order['buyer_address_2'].'<br>';	
}
if(!empty($data_order['buyer_town'])){
$html .=''.$data_order['buyer_town'].'<br>';	
}
if(!empty($data_order['buyer_county'])){
$html .=''.$data_order['buyer_county'].'<br>';	
}
if(!empty($data_order['buyer_postcode'])){
$html .=''.strtoupper($data_order['buyer_postcode']).'<br>';	
}
if(!empty($data_order['buyer_country'])){
$html .=''.$data_order['buyer_country'].'<br>';	
}
$html .='</text>
</div>
<div style="width:50%; display:block; height:120px; float:right;">

</div>
</div>';

//start table date or record no
$html .='<div style="width:100%; display:block; height:70px;">';
$html .='<div style="width:50%; float:left; ">';

$html .='</div>';
$html .='<div style="width:50%;   float:right; margin-right:4px;">';
$html .='<table cellspacing="4" cellpadding="4" height="64px" width="auto" style="float:right;  "><thead>
						<tr><td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9; border-bottom:1px solid #ada9a9; height:30px; font-size:15px; border-right:1px solid #ada9a9; text-align: center;  " ><strong style="padding:3px 3px 3px 3px;">Date</strong></td><td style="border-bottom:1px solid #ada9a9; border-top:1px solid #ada9a9; border-right:1px solid #ada9a9; border-left:1px solid #ada9a9; font-size:15px;  text-align: center; "><strong style="padding:3px 3px 3px 3px;">Sale Record</strong></td></tr>
						<tr><td style=" border-right:1px solid #ada9a9; border-left:1px solid #ada9a9; border-top:1px solid #ada9a9; border-bottom:1px solid #ada9a9; padding:3px 3px 3px 3px; width:auto; text-align: center; border-right:1px solid #ada9a9;">
';
$html .=  date('d-m-Y',strtotime($data_order['sale_date'])); 
$html .= '
</td><td style="border-right:1px solid #ada9a9; border-left:1px solid #ada9a9; border-top:1px solid #ada9a9; border-bottom:1px solid #ada9a9; padding:3px 3px 3px 3px; text-align: center; font-size:15px;">
';
$html .=  $order_no; 
$html .= '
</td></tr>
						</thead>
						</table>';
$html .='</div>';

$html .='</div>';

//start orders table

$html .='<div style="width:100%; max-height:600px; display:block;  margin:25px 5px 5px 5px; ">';
$html .='<table cellspacing="4" cellpadding="4" style="width:100%;  ">';
$html .='<tr>
								<td style="text-align:center; height:15px; border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;border-right:1px solid #ada9a9; width:10%;font-size:15px; border-bottom:1px solid #ada9a9;" ><strong>QTY</strong></td>
        							<td style="text-align:center; border-right:1px solid #ada9a9; width:60%; border-top:1px solid #ada9a9; border-left:1px solid #ada9a9; border-bottom:1px solid #ada9a9;"><strong style=" font-size:15px;">Item</strong></td>
        							
									<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; border-right:1px solid #ada9a9; width:10%;font-size:15px; border-bottom:1px solid #ada9a9;" ><strong>VAT</strong></td>
        							<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; border-right:1px solid #ada9a9; width:10%;font-size:15px; border-bottom:1px solid #ada9a9;" ><strong>Net Price</strong></td>
        							
        							<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; border-right:1px solid #ada9a9;font-size:15px; width:10%;text-align:center; border-bottom:1px solid #ada9a9;" class=""><strong style="text-align:center;">Sub Totals</strong></td>
                                </tr>';
													
$order_data = mysqli_query($conn,"select * from `order_data` where `sales_r_no`='$order_no' and `company_id`='$company_id' and `status`='$status' and `sale_date`='$sale_date'");
								while($data_order = mysqlI_fetch_assoc($order_data))
								{
									if($data_order['sku']==''){
										
									}else{
										//qty
$html .= '
    							<tr>
    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px; border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;">
';
$html .= $data_order['quantity']; 
//itemname
$html .= '
</td>
    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px;  border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;">
';
$html .=  $data_order['item_title'];
$html .='</td>';
//vat
$html .= '

    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px;  border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;">
';
$html .=  '20%';
$totalvat += number_format(($data_order['postage_packing'] + ($data_order['quantity'] * $data_order['sale_price'])) / 6,2);
$html .= '
</td>
    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px;  border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;">
';
//netprice
$html .= "&#163;".number_format($data_order['sale_price'] * $data_order['quantity'] - $data_order['sale_price'] * $data_order['quantity']/6,2);

$netvalue += number_format($data_order['sale_price'] * $data_order['quantity'] - $data_order['sale_price'] * $data_order['quantity']/6,2);

$html .= '
</td>
    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px;  border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;">
';
//subtotal
$html .=  "&#163;".$tt = number_format($data_order['sale_price'] * $data_order['quantity'],2) ; 
$html .= '
</td>
';
 $total += $tt; 
 $html .= '
    							</tr>
';
									 } 
									} 
$html .='<tr>
    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px; border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;">
';

$html .= '
</td>
    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px;  border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;"><strong>Postage & Packaging</strong>
';

$html .='</td>';
$total_postage = mysqli_query($conn,"select sum(postage_packing) as postage_packings from `order_data` where `sales_r_no`='$order_no' and `company_id`='$company_id' and `status`='$status' and `sale_date`='$sale_date'");
$postage_data = mysqli_fetch_assoc($total_postage);
$totalpostage = number_format($postage_data['postage_packings'],2);
if($totalpostage==0){
	$html .= '

    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px;  border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;">-
';

$html .= '
</td>
    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px;  border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;">
';
$html .= '-';


$html .= '
</td>
    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px;  border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;">-
';
$html .= '
</td>
';
}else{
$html .= '

    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px;  border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;">20%
';

$html .= '
</td>
    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px;  border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;">
';
$html .= '&#163;'.number_format($totalpostage - $totalpostage / 6,2);
$netvalue += number_format($totalpostage -$totalpostage / 6,2);

$html .= '
</td>
    								<td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9;text-align:center; font-size:15px;  border-right:1px solid #ada9a9; border-bottom:1px solid #ada9a9;">'.'&#163;'.$totalpostage.'
';
$html .= '
</td>
';
}
 $html .= '
    							</tr>';									

$html .='</table>';
$html .='</div>';
//total

$total = number_format($totalpostage +$total,2);

$html .='<br><div style="width:100%; display:block; height:70px;">';
$html .='<div style="width:50%; float:left; ">';

$html .='</div>';
$html .='<div style="width:50%; float:right; margin-right:4px;">';


$html .='<div style="float:right; width:199px; height:70px; display:block; text-align:left;"><table cellspacing="4" cellpadding="4" height="64px" width="auto" style="float:right;  "><thead>
						<tr><td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9; border-bottom:1px solid #ada9a9; height:30px; font-size:15px; border-right:1px solid #ada9a9; text-align: center;  " ><strong style="padding:3px 3px 3px 3px;"><b>Net Total:</b></strong></td><td style="border-bottom:1px solid #ada9a9; border-top:1px solid #ada9a9; border-right:1px solid #ada9a9; border-left:1px solid #ada9a9; font-size:15px;  text-align: center; "><strong style="padding:3px 3px 3px 3px;">'.'&#163;'.$netvalue.'</strong></td></tr>
						<tr><td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9; border-bottom:1px solid #ada9a9; height:30px; font-size:15px; border-right:1px solid #ada9a9; text-align: center;  " ><strong style="padding:3px 3px 3px 3px;"><b>VAT amount:</b></strong></td><td style="border-bottom:1px solid #ada9a9; border-top:1px solid #ada9a9; border-right:1px solid #ada9a9; border-left:1px solid #ada9a9; font-size:15px;  text-align: center; "><strong style="padding:3px 3px 3px 3px;">'.'&#163;'.$totalvat.'</strong></td></tr>
						<tr><td style=" border-top:1px solid #ada9a9; border-left:1px solid #ada9a9; border-bottom:1px solid #ada9a9; height:30px; font-size:15px; border-right:1px solid #ada9a9; text-align: center;  " ><strong style="padding:3px 3px 3px 3px;"><b>Total incl.VAT:</b></strong></td><td style="border-bottom:1px solid #ada9a9; border-top:1px solid #ada9a9; border-right:1px solid #ada9a9; border-left:1px solid #ada9a9; font-size:15px;  text-align: center; "><strong style="padding:3px 3px 3px 3px;">'.'&#163;'.$total.'</strong></td></tr>
						
						</thead>
						</table></div>';
						
			 		
$html .='</div>';

$html .='</div>';






//end of main div
$html .='</div></center><br><br><br><div style="page-break-after:always;"></div></body>';
$netvalue=null;
$totalvat=null;
$total=null;
$totalpostage=null;

echo $html;

}