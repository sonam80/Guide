<?php
require 'PHPMailerAutoload.php';


$GLOBALS['name']=isset($_REQUEST["name"])?$_REQUEST["name"]:"%";
$GLOBALS['email']=isset($_REQUEST["email"])?$_REQUEST["email"]:"%";
$GLOBALS['subject']=isset($_REQUEST["subject"])?$_REQUEST["subject"]:"%";
$GLOBALS['message']=isset($_REQUEST["message"])?$_REQUEST["message"]:"%";

$to="sonam@senena.com";
$sender=$GLOBALS['email'];

$mail = new PHPMailer;
$mail->setFrom($sender, 'Your Name');
$mail->addAddress('sonam@senena.com', 'My Friend');
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}