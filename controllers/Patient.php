<?php

class Patient {
    private $name;
    private $dob;
    private $address;

    public function __construct($name, $dob, $address) {
        $this->name = $name;
        $this->dob = $dob;
        $this->address = $address;
    }

    // Getter methods
    public function getName() {
        return $this->name;
    }

    public function getDOB() {
        return $this->dob;
    }

    public function getAddress() {
        return $this->address;
    }
}
?>
