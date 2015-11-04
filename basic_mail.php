<?php

require_once("class.phpmailer.php");

$mail             = new PHPMailer(); // defaults to using php "mail()"

$body             = "this is a basic mail example.";

$mail->SetFrom('name@yourdomain.com', 'First Last');

$mail->AddReplyTo("name@yourdomain.com","First Last");

$address = "krutarthsathe@gmail.com";  // HERE put email address where you would like to receive this email
$mail->AddAddress($address, "Krutarth Sathe");

$mail->Subject    = "PHPMailer Basic eMail Exapmple";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);


$mail->AddAttachment("images/avatar.jpg");      // attachment
$mail->AddAttachment("images/car.jpg"); // attachment


if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}



?>
