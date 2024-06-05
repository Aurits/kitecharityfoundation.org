<?php

// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Retrieve form data
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Include PHPMailer library
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

try {
    // SMTP server configuration
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // SMTP account credentials
    $mail->Username = "kitecharityfoundation@gmail.com";
    $mail->Password = "mmuz rfvc ceuj qqdr";

    // Email settings for the contact form
    $mail->setFrom($email, $name);
    $mail->addAddress("kitecharityfoundation@gmail.com", "KITE");
    $mail->addCC("info@kitecharityfoundation.org");

    // Custom subject and body for the contact form email
    $mail->Subject = "New Contact Form Submission: " . $subject;
    $mail->Body = "Dear KITE Team,\n\nYou have received a new message from " . $name . ".\n\nMessage:\n" . $message . "\n\nContact Email: " . $email . "\n\nBest regards,\nKITE Charity Foundation";

    // Send the email
    $mail->send();

    // Redirect to the confirmation page
    header("Location: sent.html");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
