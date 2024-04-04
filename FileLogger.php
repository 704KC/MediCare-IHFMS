<?php
class FileLogger implements Logger {
    public function logPayment($amount, $date) {
        $logMessage = "Payment of $amount made on $date";
        file_put_contents('payment_ledger.txt', $logMessage . PHP_EOL, FILE_APPEND);
    }
}
