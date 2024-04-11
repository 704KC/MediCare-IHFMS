<?php include 'userFormBackend.php'; ?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automated Reconciliation Form</title>
    <link rel="stylesheet" href="Style.css" >

    
</head>

<body>
    <div class="container">
        <h2>Automated Reconciliation Form</h2>
        <form action="#" method="post" class="form-sections">
            <div class="form-group">
                <label >Period for reconciliation</label>
            </div>

            <div class="form-group">
                <label for="period-start-date">From Period<span class="required">*</span></label>
                <input type="date" id="period-start-date" name="period-start-date"
                    placeholder="Enter Period Start Date" required>
            </div>

            <div class="form-group">
                <label for="period-end-date">To Period<span class="required">*</span></label>
                <input type="date" id="period-end-date" name="period-end-date"
                    placeholder="Enter Period End Date" required>
            </div>


            <!-- Accounts Payable Section -->
            <section class="form-section">
                <h3>Accounts Payable Section</h3>
                <div class="form-group">
                    <label for="ap-invoices">Total Vendor Invoices:</label>
                    <input type="number" id="ap-invoices" name="ap-invoices"
                        placeholder="Enter total vendor invoices">
                </div>
                <div class="form-group">
                    <label for="ap-payments">Total Payments to Vendors:</label>
                    <input type="number" id="ap-payments" name="ap-payments"
                        placeholder="Enter total payments to vendors">
                </div>
            </section>

            <!-- Accounts Receivable Section -->
            <section class="form-section">
                <h3>Accounts Receivable Section</h3>
                <div class="form-group">
                    <label for="ar-invoices">Total Invoices:</label>
                    <input type="number" id="ar-invoices" name="ar-invoices"
                        placeholder="Enter total invoices">
                </div>
                <div class="form-group">
                    <label for="ar-payments">Total Payments:</label>
                    <input type="number" id="ar-payments" name="ar-payments"
                        placeholder="Enter total payments">
                </div>
            </section>

            <!-- General Ledger Section -->
            <section class="form-section">
                <h3>General Ledger Section</h3>
                <div class="form-group">
                    <label for="general-ledger">Ledger:</label>
                    <input type="text" id="general-ledger" name="general-ledger" placeholder="Enter ledger">
                </div>
                <div class="form-group">
                    <label for="general-ledger-debits">General Ledger (Debits):</label>
                    <input type="number" id="general-ledger-debits" name="general-ledger-debits"
                        placeholder="Enter total debits">
                </div>
                <div class="form-group">
                    <label for="general-ledger-credits">General Ledger (Credits):</label>
                    <input type="number" id="general-ledger-credits" name="general-ledger-credits"
                        placeholder="Enter total credits">
                </div>
                <div class="form-group">
                    <label for="general-ledger-account">Account:</label>
                    <input type="number" id="general-ledger-account" name="general-ledger-account"
                        placeholder="Enter account">
                </div>
                <div class="form-group">
                    <label for="beginning-balance">Beginning Balance:</label>
                    <input type="number" id="beginning-balance" name="beginning-balance"
                        placeholder="Enter beginning balance">
                </div>
                <div class="form-group">
                    <label for="turnover">Turnover:</label>
                    <input type="number" id="turnover" name="turnover" placeholder="Enter turnover">
                </div>
                <div class="form-group">
                    <label for="ending-balance">Ending Balance:</label>
                    <input type="number" id="ending-balance" name="ending-balance" placeholder="Enter ending balance">
                </div>
            </section>

            <!-- Submit Button -->
            <div class="form-group" style="grid-column: span 3;">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>
