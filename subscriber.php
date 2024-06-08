<?php

// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $subject = "Subscription Confirmation";
    $message = "Thank you for subscribing to our newsletter!";

    require "vendor/autoload.php";

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

        // Unsubscribe link (for demo purposes, email is used directly)
        $unsubscribeLink = "https://kitecharityfoundation.org/unsubscribe.php?email=" . urlencode($email);

        // Email to subscriber
        $mail->setFrom("kitecharityfoundation@gmail.com", "KITE Charity Foundation");
        $mail->addAddress($email);
        $mail->Subject = "Subscription Confirmation";
        $mail->Body = "Dear Subscriber,\n\nThank you for subscribing to our newsletter! We will keep you updated with our latest news and events.\n\nIf you wish to unsubscribe at any time, please click the following link:\n\n" . $unsubscribeLink . "\n\nBest regards,\nKITE Charity Foundation";

        // Send email to subscriber
        $mail->send();

        // Email to main recipient and admin about the new subscription
        $mail->clearAddresses();
        $mail->addAddress("kitecharityfoundation@gmail.com", "KITE");
        $mail->addCC("info@kitecharityfoundation.org");
        $mail->Subject = "New Newsletter Subscription";
        $mail->Body = "A new user has subscribed to the newsletter.\n\nSubscriber Email: " . $email . "\n\nBest regards,\nKITE Charity Foundation";

        // Send email to main recipient and admin
        $mail->send();

        // Redirect to the confirmation page
        header("Location: sent_sub.html");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    header("Location: index.html");
}
