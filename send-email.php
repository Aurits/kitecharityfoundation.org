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

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "ateraxantonio@gmail.com";
$mail->Password = "sayw rhsb tysy hkjs";

$mail->setFrom($email, $name);
$mail->addAddress("ateraxantonio@gmail.com", "Alanda Ambrose");

$mail->Subject = $subject;
$mail->Body = $message . " Email: " . $email;

$mail->send();

header("Location: sent.html");
