<?php
include 'config.php';




use PHPMailer\PHPMailer\PHPMailer;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';




if(!isset($_GET['type']) && $_GET['type'] != 'curl') {

	$ids =  implode (", ", $_POST['include_ids']);
	$mail_data = mysqli_query($conn,"select * from `mail` where `status`='' AND main_order_id IN (".$ids.") ORDER BY mail_id desc LIMIT 15");

} else {
	
	$mail_data = mysqli_query($conn,"select * from `mail` where `status`='' ORDER BY mail_id desc LIMIT 15");

}

while($data_mail  = mysqli_fetch_assoc($mail_data)) {
	 $main_order_id= $data_mail['main_order_id'];
	 $sales_r_no11= $data_mail['sales_r_no'];
	$order_data = mysqli_query($conn,"select * from `order_data` where `id`='$main_order_id' order by id asc");
	$data_order= mysqli_fetch_assoc($order_data);
	  $buyer_email = 'nomanaadma@gmail.com'; //'vijay_pl@ymail.com'; //$data_order['buyer_email'];
	 $buyer_name = $data_order['buyer_name'];
	 $order_no = $data_order['sales_r_no'];
	
	$company_id = $data_order['company_id'];
	$company_data = mysqli_query($conn,"select * from `company` where `id`='$company_id'");
	$data_company= mysqli_fetch_assoc($company_data);
	$company_name = $data_company['name'];
	$company_email_from = $data_company['from'];
	$company_email_to = $data_company['to'];
	$vat = $data_company['vat'];
	

$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Set the hostname of the mail server
$mail->Host = 'app.postage-solutions.co.uk';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
//Username to use for SMTP authentication
$mail->Username = 'appdemo@app.postage-solutions.co.uk';
//Password to use for SMTP authentication
$mail->Password = '@@@demodemo';
//Set who the message is to be sent from
$mail->setFrom($company_email_from, $company_name);
//Set an alternative reply-to address
$mail->addReplyTo($company_email_to, $company_name);
//Set who the message is to be sent to
$mail->addAddress($buyer_email, $buyer_name);
//Set the subject line
$mail->Subject = 'VAT Invoice from :'.' '.$company_name;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML('Dear '.$data_order['buyer_name'].',<br>

Thank you very much for your recent purchase. Please find an attached VAT invoice for your accounts. If you have any query, please feel free to contact us and will get in touch with you as soon as possible.
<br>
Thank you.<br>

Kind regards,<br>'.$company_name);
//Replace the plain text body with one created manually
$mail->AltBody = 'Invoice';
echo file_get_contents($order_no.'-'.'invoice.pdf');
//Attach an image file
 if(file_get_contents($order_no.'-'.'invoice.pdf')){
$mail->AddAttachment($order_no.'-'.'invoice.pdf'); 
}   
$today = date('Y-m-d');
$filename = $order_no.'-'.'invoice.pdf';   
$filename2 = $sales_r_no11.'-'.'invoice.pdf';   
if(!$mail->Send()) 
   {
    echo "Mailer Error: " . $mail->ErrorInfo;
	
	mysqli_query($conn,"update `mail` set `date`='$today',`status`='failed' where `main_order_id`='$main_order_id'");
	
  unlink($filename);
  unlink($filename2);
   } 
else 
  {
  echo "Message sent!";
 
  unlink($filename);
  unlink($filename2);
 mysqli_query($conn,"update `mail` set `date`='$today',`status`='sent' where `main_order_id`='$main_order_id'");
 }

 

} 



 ?>