<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './mailer/src/PHPMailer.php';
require './mailer/src/SMTP.php';
require './mailer/src/Exception.php';

$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'technotour2023@gmail.com';
$mail->Password = 'dsspiatuxovcbpxa';
$to = $email;
$subject = 'TechnoTour';
$message = 'Your verification code is: '.$verification_code;
$mail->SetFrom('khamisamr90@gmail.com');
$mail->AddAddress($to);
$mail->Subject = $subject;
$mail->Body = $message;
$mail->Send();

?>