<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . "/vendor/autoload.php";

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = 'ssl';

$mail->Port = 465;
$mail->SMTPAuth =true;
$mail->Username = "abobedro92@gmail.com"; 
$mail->Password = "";

$mail->isHtml(true);

return $mail;