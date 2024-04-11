<?php
// Invoice.php

class Invoice {
    private $amount;
    private $date;

    public function __construct($amount, $date) {
        $this->amount = $amount;
        $this->date = $date;
    }

    // Getter methods
    public function getAmount() {
        return $this->amount;
    }

    public function getDate() {
        return $this->date;
    }
}
?>
