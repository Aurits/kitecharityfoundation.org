<?php

echo "<div style='
max-width: 600px;
margin: 50px auto;
padding: 20px;
font-family: Arial, sans-serif;
font-size: 16px;
color: #333;
background-color: #f9f9f9;
border: 1px solid #ddd;
border-radius: 8px;
box-shadow: 0 4px 8px rgba(0,0,0,0.1);
text-align: center;
'>

<h2 style='color: #d9534f; margin-bottom: 10px;'>Unsubscription Successful</h2>
<p>We’re sorry to see you go! You have been successfully unsubscribed from our newsletter.</p>
<p>If this was a mistake or you change your mind, you can always resubscribe on our <a href='https://kitecharityfoundation.org' style='color: #007bff; text-decoration: none;'>website</a>.</p>
<p>Thank you for your past engagement with our updates.</p>
<p style='margin-top: 20px; font-size: 14px; color: #777;'>If you have any questions or need further assistance, please <a href='https://kitecharityfoundation.org/contact.html' style='color: #007bff; text-decoration: none;'>contact us</a>.</p>
</div>";

// // Enable error reporting for debugging purposes
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// // Assuming you store subscriptions in a database
// require 'database_connection.php'; // Update with your actual DB connection script

// if (isset($_GET['email'])) {
//     $email = $_GET['email'];
//     $stmt = $conn->prepare("DELETE FROM subscribers WHERE email = ?");
//     $stmt->bind_param("s", $email);

//     if ($stmt->execute()) {
//         echo "<div style='
//             max-width: 600px;
//             margin: 50px auto;
//             padding: 20px;
//             font-family: Arial, sans-serif;
//             font-size: 16px;
//             color: #333;
//             background-color: #f9f9f9;
//             border: 1px solid #ddd;
//             border-radius: 8px;
//             box-shadow: 0 4px 8px rgba(0,0,0,0.1);
//             text-align: center;
//         '>
//             <img src='https://yourdomain.com/images/unsubscribed.png' alt='Unsubscribed' style='max-width: 100px; margin-bottom: 20px;'>
//             <h2 style='color: #d9534f; margin-bottom: 10px;'>Unsubscription Successful</h2>
//             <p>We’re sorry to see you go! You have been successfully unsubscribed from our newsletter.</p>
//             <p>If this was a mistake or you change your mind, you can always resubscribe on our <a href='https://yourdomain.com/subscribe' style='color: #007bff; text-decoration: none;'>website</a>.</p>
//             <p>Thank you for your past engagement with our updates.</p>
//             <p style='margin-top: 20px; font-size: 14px; color: #777;'>If you have any questions or need further assistance, please <a href='https://yourdomain.com/contact' style='color: #007bff; text-decoration: none;'>contact us</a>.</p>
//         </div>";
//     } else {
//         echo "<div style='
//             max-width: 600px;
//             margin: 50px auto;
//             padding: 20px;
//             font-family: Arial, sans-serif;
//             font-size: 16px;
//             color: #333;
//             background-color: #f9f9f9;
//             border: 1px solid #ddd;
//             border-radius: 8px;
//             box-shadow: 0 4px 8px rgba(0,0,0,0.1);
//             text-align: center;
//         '>
//             <h2 style='color: #d9534f; margin-bottom: 10px;'>Unsubscription Failed</h2>
//             <p>Unfortunately, we encountered an issue processing your unsubscription.</p>
//             <p>Please try again later or <a href='https://yourdomain.com/contact' style='color: #007bff; text-decoration: none;'>contact our support team</a> for assistance.</p>
//         </div>";
//     }

//     $stmt->close();
//     $conn->close();
// } else {
//     echo "<div style='
//         max-width: 600px;
//         margin: 50px auto;
//         padding: 20px;
//         font-family: Arial, sans-serif;
//         font-size: 16px;
//         color: #333;
//         background-color: #f9f9f9;
//         border: 1px solid #ddd;
//         border-radius: 8px;
//         box-shadow: 0 4px 8px rgba(0,0,0,0.1);
//         text-align: center;
//     '>
//         <h2 style='color: #d9534f; margin-bottom: 10px;'>Invalid Request</h2>
//         <p>Invalid request. Please ensure you accessed the correct unsubscribe link.</p>
//     </div>";
// }