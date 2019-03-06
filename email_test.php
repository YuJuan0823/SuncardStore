<?php 
require_once 'PHPMailer.php';
require_once 'Exception.php';
require_once 'SMTP.php';

$err = array();

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isSMTP();  // the mailer is set to use SMTP
$mail->SMTPDebug = 2; // 1 - errors & messages; 2 - messages only
$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->SMTPAuth = true; // SMTP authentication is turned on
$mail->Username = "twilight0823@gmail.com";  // SMTP username
$mail->Password = "juan0823"; // SMTP password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->From = "twilight0823@gmail.com";
$mail->FromName = "Yoojung";	 // name is optional
$mail->AddAddress('twilight0823@gmail.com');
$mail->AddReplyTo("twilight0823@gmail.com", "Hello");

$mail->WordWrap = 50;  // set word wrap to 50 characters
$mail->IsHTML(true); // set email format to HTML

$mail->Subject = "PHPMailer tester";
$mail->Body    = "This is a test email.";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send()) {
   $err['mail'] = $mail->ErrorInfo;
}
?>