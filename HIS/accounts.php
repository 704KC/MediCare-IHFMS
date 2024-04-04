<?php
// accounts.php

// Include the database connection
include '../database.php';
$db = Database::getInstance();
$connection = $db->getConnection();
// Query to retrieve invoices data
$invoicesQuery = "SELECT amount FROM invoices";
$invoicesResult = $connection->query($invoicesQuery);

// Query to retrieve payments data
$paymentsQuery = "SELECT amount FROM payments";
$paymentsResult = $connection->query($paymentsQuery);

// Initialize variables to store total amounts
$totalAccountsReceivable = 0;
$totalAccountsPayable = 0;

// Calculate total accounts receivable
$invoice = $invoicesResult->fetch(PDO::FETCH_ASSOC);
while ($invoice) {
    $totalAccountsReceivable += $invoice['amount'];
    $invoice = $invoicesResult->fetch(PDO::FETCH_ASSOC);
}

// Calculate total accounts payable
$payment = $paymentsResult->fetch(PDO::FETCH_ASSOC);
while ($payment) {
    $totalAccountsPayable += $payment['amount'];
    $payment = $paymentsResult->fetch(PDO::FETCH_ASSOC);
}

// Close database connection
// $connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts Reconciliation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'topbar.php'; ?>

    <div class="content">
        <!-- Content area -->
        <h1>Accounts Reconciliation</h1>
        <div class="accounts-summary">
            <h2>Total Accounts Receivable: <?php echo $totalAccountsReceivable; ?></h2>
            <h2>Total Accounts Payable: <?php echo $totalAccountsPayable; ?></h2>
        </div>
    </div>
</body>
</html>
