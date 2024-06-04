<?php
// Enable error reporting
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
        $mail->Username = "your_email@gmail.com";
        $mail->Password = "your_password";

        // Email settings for subscriber
        $mail->setFrom("your_email@gmail.com", "Your Name");
        $mail->addAddress($email);

        $mail->Subject = $subject;
        $mail->Body = $message . " Email: " . $email;

        // Send email to subscriber
        $mail->send();

        // Email settings for admin notification
        $mail->clearAddresses();
        $mail->addAddress("admin_email@gmail.com", "Admin Name");
        $mail->Subject = "New Newsletter Subscription";
        $mail->Body = "A new user has subscribed to the newsletter. Email: " . $email;

        // Send email to admin
        $mail->send();

        header("Location: sent.html");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    header("Location: index.html");
}
