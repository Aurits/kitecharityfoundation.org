<?php

echo "<p style='font-family: Arial, sans-serif; font-size: 16px; color: #333;'>We’re sorry to see you go! You have been successfully unsubscribed from our newsletter. If this was a mistake or you change your mind, you can always resubscribe on our website. Thank you for your past engagement with our updates.</p>";

// Enable error reporting for debugging purposes
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// // Assuming you store subscriptions in a database
// require 'database_connection.php'; // Update with your actual DB connection script

// if (isset($_GET['email'])) {
//     $email = $_GET['email'];
//     $stmt = $conn->prepare("DELETE FROM subscribers WHERE email = ?");
//     $stmt->bind_param("s", $email);

//     if ($stmt->execute()) {
//         echo "<p style='font-family: Arial, sans-serif; font-size: 16px; color: #333;'>We’re sorry to see you go! You have been successfully unsubscribed from our newsletter. If this was a mistake or you change your mind, you can always resubscribe on our website. Thank you for your past engagement with our updates.</p>";
//     } else {
//         echo "<p style='font-family: Arial, sans-serif; font-size: 16px; color: #f00;'>Unfortunately, we encountered an issue processing your unsubscription. Please try again later or contact our support team for assistance.</p>";
//     }

//     $stmt->close();
//     $conn->close();
// } else {
//     echo "<p style='font-family: Arial, sans-serif; font-size: 16px; color: #f00;'>Invalid request. Please ensure you accessed the correct unsubscribe link.</p>";
// }