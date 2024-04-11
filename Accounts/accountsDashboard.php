<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts Reconciliation Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
        }

        .card {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            margin-top: 0;
        }

        .card p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <!--form action="dashboardBackend.php" method="post"-->
    <div class="container">
        <div class="header">
            <h1>Accounts Reconciliation Dashboard</h1>
        </div>
        <div class="dashboard">
            <!-- Accounts Receivable Card -->
            <div class="card">
                <h2>Accounts Receivable</h2>
                <p>Total Invoices: 100</p>
                <p>Total Payments: 80</p>
                <p>Matched Invoices: 75</p>
            </div>

            <!-- Accounts Payable Card -->
            <div class="card">
                <h2>Accounts Payable</h2>
                <p>Total Vendor Invoices: 120</p>
                <p>Total Payments to Vendors: 90</p>
                <p>Matched Invoices: 85</p>
            </div>

            <!-- General Ledger Card -->
            <div class="card">
                <h2>General Ledger</h2>
                <p>Total Debits: $100</p>
                <p>Total Credits: $100</p>
                <p>Balance Status: Balanced</p>
            </div>
        </div>
    </div>
</body>
</html>
