<?php
// Establish database connection (replace database credentials with actual values)
$servername = "localhost";
$username = "root";
$password = "Chel@123";
$database = "ihfms";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $invoice_number = $_POST["invoice_number"];
    $amount = $_POST["amount"];
    $id = $_POST["id"];
    $Name = $_POST["patient_name"];
    $Service = $_POST["services"];
    $Payment = $_POST["payment_method"];

    // Insert data into database (replace table_name with your actual table name)
    $sql = "INSERT INTO invoice (id, invoice_number, amount,Patient_Name, Services, Payment_Mode) VALUES ('$id','$invoice_number', '$amount', '$Name','$Service','$Payment')";

    if ($conn->query($sql) === TRUE) {
        echo "Invoice generated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
