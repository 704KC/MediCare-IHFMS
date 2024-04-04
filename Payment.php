<?php

class Payment {
    private $amount;
    private $date;

    public function __construct($amount, $date) {
        $this->amount = $amount;
        $this->date = $date;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getDate() {
        return $this->date;
    }
}

