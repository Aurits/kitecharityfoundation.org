<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.hostinger.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 465;

$mail->Username = "kitecharityfoundation@outlook.com";
$mail->Password = "ghbbffftww546$";

$mail->setFrom($email, $name);
$mail->addAddress("kitecharityfoundation@outlook.com", "KITE CHARITY FOUNDATION");

$mail->Subject = $subject;
$mail->Body = $message . " Email: " . $email;

$mail->send();

header("Location: sent.html");
