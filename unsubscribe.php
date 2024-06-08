<?php

// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Assuming you store subscriptions in a database
require 'database_connection.php'; // Update with your actual DB connection script

if (isset($_GET['email'])) {
    $email = $_GET['email'];
    $stmt = $conn->prepare("DELETE FROM subscribers WHERE email = ?");
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        echo "You have successfully unsubscribed.";
    } else {
        echo "There was an error processing your unsubscription.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
