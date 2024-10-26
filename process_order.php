<?php
session_start();

// Include database connection if you need to store the order in the database
include('connection.php');

// Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture shipping information
    $full_name = $_POST['full_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip_code = $_POST['zip_code'];

    // Capture payment information (Note: For demonstration only; sensitive info should not be handled this way in production)
    $card_name = $_POST['card_name'];
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    // Here you can add your code to store order details in the database

    // Redirect to a thank-you page or display a success message
    $_SESSION['success_message'] = "Thank you for your purchase! Welcome to the Toxico Family.";
    header("Location: thankyou.php");
    exit();
} else {
    // Redirect to checkout if accessed directly
    header("Location: checkout.php");
    exit();
}
?>
