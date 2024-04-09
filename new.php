<?php
// Database connection
$dbHost = 'localhost';
$dbName = 'ihfms';
$dbUser = 'root';
$dbPass = 'Chel@123';

// Create connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Error: Could not connect. " . $conn->connect_error);
}

// Check if the form was submitted
if(isset($_POST['submit'])) {
    var_dump($_POST); // Display POST data for debugging

    $transactionType = $_POST['transactionType'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];
    $invoiceNumber = $_POST['invoiceNumber'];

    // Check if all required fields are filled
    if(!empty($transactionType) && !empty($amount) && !empty($description) && !empty($invoiceNumber)) {
        // Escape special characters to prevent SQL injection
        $transactionType = $conn->real_escape_string($transactionType);
        $amount = $conn->real_escape_string($amount);
        $description = $conn->real_escape_string($description);
        $invoiceNumber = $conn->real_escape_string($invoiceNumber);

        // Build the SQL query
        $sql = "INSERT INTO transactions (transaction_type, amount, description, invoice_number) VALUES ('$transactionType', '$amount', '$description', '$invoiceNumber')";

        // Execute the statement
        if ($conn->query($sql)) {
            echo "Transaction recorded successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error: Please fill all required fields.";
    }
} else {
    // Debug message for GET requests
    echo "This page is accessed. No data submitted.";
}

// Close connection
$conn->close();
?>
