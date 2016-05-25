<?php
header("Content-type: text/html; charset=UTF-8");

//function send_mail()

require_once('phpmailer\class.phpmailer.php');
include_once 'phpmailer\class.smtp.php';

$mail             = new PHPMailer();


$mail->IsSMTP(); 
$mail->Host       = "smtp.ukr.net"; 
$mail->SMTPDebug  = 2; 
$mail->SMTPAuth   = true;                
$mail->SMTPSecure = "ssl";
$mail->Port       = 465; 
$mail->CharSet    = 'UTF-8';

$mail->Username   = "naaa@ukr.net";
$mail->Password   = "98465703nazik";      

$body             = "sdfsdfsdfsdf";
$mail->SetFrom('naaa@ukr.net', 'Contact Mananger');
$mail->Subject    = "Мій перший лист222";
$mail->MsgHTML($body);
$address = "naaa@ukr.net";
$mail->AddAddress($address, "fghfgh", "naaa.nazar@gmail.com", "afsdfsdf"  );
$mail->AddAddress("naaa.nazar@gmail.com");


if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
    
?>