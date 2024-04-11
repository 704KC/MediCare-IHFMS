<?php
class LoggerDecorator implements Logger {
    protected $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function logPayment($amount, $date) {
        // Log payment activity
        $this->logger->logPayment($amount, $date);
    }
}