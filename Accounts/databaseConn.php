<?php
// Sample database connection
$servername = "localhost";
$username = "";
$password = "";
$dbname = "IHFMS_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Close connection
$conn->close();

