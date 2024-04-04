<?php
// DiscountCalculationStrategy.php

class DiscountCalculationStrategy implements FinancialCalculationInterface {
    public function calculate($amount) {
        // assumed a fixed discount of $5
        $discountAmount = 5;
        return $discountAmount;
    }
}
