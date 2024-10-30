<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include 'dbconnection.php'; // Adjust the path as necessary

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $where_to = $_POST['where_to'] ?? '';
    $when_to = $_POST['when_to'] ?? '';
    $how_many = $_POST['how_many'] ?? '';

    // Perform any necessary validation here
    if (empty($where_to) || empty($when_to) || empty($how_many)) {
        echo "All fields are required.";
        exit;
    }

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO tourists (where_to, when_to, how_many) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $where_to, $when_to, $how_many); // 'ssi' means: string, string, integer

    // Execute the statement
    if ($stmt->execute()) {
        // Only display this message upon successful insertion
        echo "Booking details have been successfully saved.";
    } else {
        echo "Error: " . $stmt->error; // This will give you more information about the error
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>