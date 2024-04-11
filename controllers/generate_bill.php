<?php
require_once('tcpdf/tcpdf.php');

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
    $patient_name = $_POST["patient_name"];
    $service_type = $_POST["service_type"];
    $amount = $_POST["amount"];
    $bill_id = $_POST["bills"];

    // Insert data into bills table (replace table_name with your actual table name)
    $sql = "INSERT INTO bills (bill_id, patient_name, service_type, amount) VALUES ('$bill_id', '$patient_name', '$service_type', '$amount')";

    if ($conn->query($sql) === TRUE) {
        echo "Bill generated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
