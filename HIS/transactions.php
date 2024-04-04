<?php
// transactions.php

// Include the database connection
include '../database.php';
$db = Database::getInstance();
$connection = $db->getConnection();
// Query to retrieve invoices and payments data
$invoicesQuery = "SELECT id, amount, date FROM invoices";
$invoicesResult = $connection->query($invoicesQuery);

$paymentsQuery = "SELECT id, amount, date FROM payments";
$paymentsResult = $connection->query($paymentsQuery);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Transactions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'topbar.php'; ?>

    <div class="content">
        <h1>Transactions</h1>
        <h2>Invoices</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // invoices data
                while ($row = $invoicesResult->fetch(PDO::FETCH_ASSOC)) {
                  echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['amount'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <h2>Payments</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Amount</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //  payments data
                while ($row = $paymentsResult->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['amount'] . "</td>";
                    echo "<td>" . $row['date'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
