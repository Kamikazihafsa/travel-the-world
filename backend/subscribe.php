<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include 'dbconnection.php'; // Adjust the path as necessary

$responseMessage = ''; // Variable to hold the response message

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];

        // Here you would typically check if the email is already subscribed
        // For example:
        $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            $responseMessage = "Thank you for subscribing!";
        } else {
            $responseMessage = "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        $responseMessage = "Email is not set.";
    }

    echo $responseMessage; // Send the response back to the AJAX call
    exit; // Make sure to exit after echoing the response
}

$conn->close();
?>