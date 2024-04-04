<?php

class TransactionFactory {
    // Factory method to create an Invoice object
    public static function createInvoice($amount, $date) {
        return new Invoice($amount, $date);
    }

    // Factory method to create a Payment object
    public static function createPayment($amount, $date) {
        return new Payment($amount, $date);
    }
}
