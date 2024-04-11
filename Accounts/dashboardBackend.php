<?php 

// interface for reconciliation algorithms
interface ReconciliationStrategy {
    public function reconcile($data);
}

// Concrete implementations of reconciliation strategies
class AccountsReceivableReconciliation implements ReconciliationStrategy {
    public function reconcile($data) {
        // Example: Algorithm for reconciling accounts receivable in IHFMS
        $invoices = $data['invoices']; // Assuming $data contains an array of invoices
        $payments = $data['payments']; // Assuming $data contains an array of payments

        // Match invoices with payments
        $matchedInvoices = [];
        foreach ($invoices as $invoice) {
            foreach ($payments as $payment) {
                if ($invoice['invoice_id'] === $payment['invoice_id'] && $invoice['amount'] === $payment['amount']) {
                    $matchedInvoices[] = $invoice;
                    break;
                }
            }
        }

        // Generate a report or update the system with reconciled data
        $report = "Accounts Receivable reconciliation completed successfully. Matched invoices: " . count($matchedInvoices);
        return $report;
    }
}

class AccountsPayableReconciliation implements ReconciliationStrategy {
    public function reconcile($data) {
        // Example: Algorithm for reconciling accounts payable in IHFMS
        $vendorInvoices = $data['vendor_invoices']; // Assuming $data contains an array of vendor invoices
        $payments = $data['payments']; // Assuming $data contains an array of payments to vendors

        // Match vendor invoices with payments
        $matchedInvoices = [];
        foreach ($vendorInvoices as $invoice) {
            foreach ($payments as $payment) {
                if ($invoice['invoice_id'] === $payment['invoice_id'] && $invoice['amount'] === $payment['amount']) {
                    $matchedInvoices[] = $invoice;
                    break;
                }
            }
        }

        // Generate a report or update the system with reconciled data
        $report = "Accounts Payable reconciliation completed successfully. Matched vendor invoices: " . count($matchedInvoices);
        return $report;
    }
}

class GeneralLedgerReconciliation implements ReconciliationStrategy {
    public function reconcile($data) {
        // Example: Algorithm for reconciling general ledger entries in IHFMS
        $entries = $data['ledger_entries']; // Assuming $data contains an array of general ledger entries

        // Calculate total debits and credits
        $totalDebits = 0;
        $totalCredits = 0;
        foreach ($entries as $entry) {
            $totalDebits += $entry['debit'];
            $totalCredits += $entry['credit'];
        }

        // Check if debits and credits balance
        $isBalanced = ($totalDebits === $totalCredits);

        // Generate a report or update the system with reconciled data
        if ($isBalanced) {
            $report = "General Ledger reconciliation completed successfully. Debits and credits are balanced.";
        } else {
            $report = "General Ledger reconciliation completed with discrepancies. Debits and credits are not balanced.";
        }
        return $report;
    }
}

// Decorator for logging reconciliation actions
class ReconciliationLoggerDecorator implements ReconciliationStrategy {
    protected $reconciliationStrategy;

    public function __construct(ReconciliationStrategy $reconciliationStrategy) {
        $this->reconciliationStrategy = $reconciliationStrategy;
    }

    public function reconcile($data) {
        $result = $this->reconciliationStrategy->reconcile($data);
        $this->log($result);
        return $result;
    }

    protected function log($message) {
        // Code to log the reconciliation action
        echo "Reconciliation logged: $message\n";
    }
}

// Context class that uses the reconciliation strategies
class ReconciliationModule {
    private $strategy;

    public function __construct(ReconciliationStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function performReconciliation($data) {
        // Perform reconciliation using the assigned strategy
        return $this->strategy->reconcile($data);
    }
}
 

// Fetch data from the database and assign it to the $data array
$data = [];

// Fetch data from invoices table
$sqlInvoices = "SELECT * FROM invoices";
$resultInvoices = $conn->query($sqlInvoices);

$invoicesData = [];
if ($resultInvoices->num_rows > 0) {
    while($row = $resultInvoices->fetch_assoc()) {
        $invoicesData[] = $row;
    }
    $data['invoices'] = $invoicesData;
} else {
    echo "0 results found in the invoices table";
}

// Fetch data from payments table
$sqlPayments = "SELECT * FROM payments";
$resultPayments = $conn->query($sqlPayments);

$paymentsData = [];
if ($resultPayments->num_rows > 0) {
    while($row = $resultPayments->fetch_assoc()) {
        $paymentsData[] = $row;
    }
    $data['payments'] = $paymentsData;
} else {
    echo "0 results found in the payments table";
}

// Fetch data from vendor_invoices table (assuming such a table exists)
$sqlVendorInvoices = "SELECT * FROM vendor_invoices";
$resultVendorInvoices = $conn->query($sqlVendorInvoices);

$vendorInvoicesData = [];
if ($resultVendorInvoices->num_rows > 0) {
    while($row = $resultVendorInvoices->fetch_assoc()) {
        $vendorInvoicesData[] = $row;
    }
    $data['vendor_invoices'] = $vendorInvoicesData;
} else {
    echo "0 results found in the vendor_invoices table";
}

// Fetch data from ledger_entries table
$sqlLedgerEntries = "SELECT * FROM ledger_entries";
$resultLedgerEntries = $conn->query($sqlLedgerEntries);

$ledgerEntriesData = [];
if ($resultLedgerEntries->num_rows > 0) {
    while($row = $resultLedgerEntries->fetch_assoc()) {
        $ledgerEntriesData[] = $row;
    }
    $data['ledger_entries'] = $ledgerEntriesData;
} else {
    echo "0 results found in the ledger_entries table";
}



// Create instances of reconciliation strategies
$accountsReceivableStrategy = new AccountsReceivableReconciliation();
$accountsPayableStrategy = new AccountsPayableReconciliation();
$generalLedgerStrategy = new GeneralLedgerReconciliation();

// Wrap the strategies with the logger decorators
$loggerAccountsReceivable = new ReconciliationLoggerDecorator($accountsReceivableStrategy);
$loggerAccountsPayable = new ReconciliationLoggerDecorator($accountsPayableStrategy);
$loggerGeneralLedger = new ReconciliationLoggerDecorator($generalLedgerStrategy);

// Create instances of reconciliation modules with the decorated strategies
$moduleAccountsReceivable = new ReconciliationModule($loggerAccountsReceivable);
$moduleAccountsPayable = new ReconciliationModule($loggerAccountsPayable);
$moduleGeneralLedger = new ReconciliationModule($loggerGeneralLedger);

// Call performReconciliation() method for each module and echo the results
echo "Accounts Receivable Reconciliation:\n";
echo $moduleAccountsReceivable->performReconciliation($data) . "\n\n";

echo "Accounts Payable Reconciliation:\n";
echo $moduleAccountsPayable->performReconciliation($data) . "\n\n";

echo "General Ledger Reconciliation:\n";
echo $moduleGeneralLedger->performReconciliation($data) . "\n\n";

?>
