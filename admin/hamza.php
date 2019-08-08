<?php
//include 'config.php';




use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/PHPMailerAutoload.php';
//require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';





	

$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
//$mail->SMTPDebug = 0;
//Set the hostname of the mail server
$mail->Host = 'n3plcpnl0063.prod.ams3.secureserver.net';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = '465';
$mail->Encryption="none";
$mail->CharSet = 'UTF-8';
//$mail->isHTML(true);
//$mail->SMTPKeepAlive = true;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
//Username to use for SMTP authentication
$mail->Username = 'oms@shopping-hub.in';
//Password to use for SMTP authentication
$mail->Password = 'hamzahussain';
//Set who the message is to be sent from

$mail->From = 'oms@shopping-hub.in';
$mail->FromName = 'vijay';
$mail->addAddress('hamza.hussain335@gmail.com');
//$mail->isHTML(true);
$mail->Subject = 'ssl';
$mail->Body = 'Hello!';
$mail->SMTPDebug = 3;
if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}

//$tst=mail("hamza.hussain335@gmail.com","test","test");
//var_dump($tst);
 ?>