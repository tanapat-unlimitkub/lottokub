<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from       = "webmaster@cherryiptv.com";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.cherryiptv.com"; // Amazon SES server, note "tls://" protocol
$mail->Port       =  25;                    // set the SMTP port
$mail->Username   = "webmaster@cherryiptv.com";  // SMTP  username
$mail->Password   = "123456";  // SMTP password
$mail->SetFrom($from, 'Coupon System');
$mail->AddReplyTo($from,'Coupon System');
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->Send();   
}
?>
