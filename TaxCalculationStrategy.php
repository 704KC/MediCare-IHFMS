<?php
// TaxCalculationStrategy.php

class TaxCalculationStrategy implements FinancialCalculationInterface {
    public function calculate($amount) {
        // we assume a simple tax rate of 10%
        $taxRate = 0.10;
        return $amount * $taxRate;
    }
}

