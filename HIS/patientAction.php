<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// patient.php

// Include the database connection class
include '../database.php';
include '../Patient.php';
include '../Invoice.php';
include '../Payment.php';
include '../TransactionFactory.php';
include '../FinancialCalculationInterface.php';
include '../TaxCalculationStrategy.php';
include '../DiscountCalculationStrategy.php';
include '../Logger.php';
include '../FileLogger.php';
include '../LoggerDecorator.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data for patient information
    $name = $_POST["name"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];

    $fileLogger = new FileLogger();

    // Wrap logger with decorator
    $decoratedLogger = new LoggerDecorator($fileLogger);  
    
    // Create a new Patient object
    $patient = new Patient($name, $dob, $address);

    // Initialize database connection using Singleton pattern
    $db = Database::getInstance();
    $connection = $db->getConnection();

    // Insert patient information into the patients table
    $stmt = $connection->prepare("INSERT INTO patients (name, dob, address) VALUES (:name, :dob, :address)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':dob', $dob);
    $stmt->bindParam(':address', $address);
    $stmt->execute();

    $patientId = $connection->lastInsertId();
    if ($patientId) {
        // Retrieve form data for transaction
        $transactionType = $_POST["transaction_type"];
        $amount = $_POST["amount"];
        $transactionDate = $_POST["transaction_date"];

        if ($transactionType == "invoice") {
          // Use TaxCalculationStrategy for invoice amount calculation
          $taxStrategy = new TaxCalculationStrategy();
          $taxAmount = $taxStrategy->calculate($amount);
      
          // Create Invoice with tax amount included
          $realamount = $amount + $taxAmount;
          $transaction = TransactionFactory::createInvoice($realamount, $transactionDate);
          $tableName = "invoices";
      } elseif ($transactionType == "payment") {
          // Use DiscountCalculationStrategy for payment amount calculation
          $discountStrategy = new DiscountCalculationStrategy();
          $discountAmount = $discountStrategy->calculate($amount);
      
          // Create Payment with discount applied
          $payable = $amount - $discountAmount;
          $transaction = TransactionFactory::createPayment($payable, $transactionDate);
          $tableName = "payments";
          //log payment to ledger
          $decoratedLogger->logPayment($payable,  $transactionDate);

      }
      

        // Insert transaction data into the respective table (invoices or payments)
        $stmt = $connection->prepare("INSERT INTO $tableName (patient_id, amount, date) VALUES (:patient_id, :amount, :date)");
        $stmt->bindParam(':patient_id', $patientId);
        if ($transactionType == "invoice") { $stmt->bindParam(':amount', $realamount );}
        if ($transactionType == "payment") { $stmt->bindParam(':amount', $payable );}
        $stmt->bindParam(':date', $transactionDate);
        $stmt->execute();

        // Check if transaction data is inserted successfully
        if ($stmt->rowCount() > 0) {
            echo "<h2>Success!</h2>";
            echo "<p>Patient information and transaction data have been successfully added to the database.</p>";
        } else {
            echo "<h2>Error!</h2>";
            echo "<p>Failed to add patient information and transaction data to the database.</p>";
        }
    } else {
        echo "<h2>Error!</h2>";
        echo "<p>Failed to add patient information to the database.</p>";
    }
}

