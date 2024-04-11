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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $transactionType = $_POST['transactionType'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];
    $invoiceNumber = $_POST['invoiceNumber'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO transactions (transaction_type, amount, description, invoice_number) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $transactionType, $amount, $description, $invoiceNumber);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Transaction recorded successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
