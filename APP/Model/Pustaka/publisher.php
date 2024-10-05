<?php

namespace App\Model\Pustaka;

class publisher
{
    public $name;
    public $address;
    public $phone;

    // Konstruktor
    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->setPhone($phone);
    }

    // Metode untuk mengatur nomor telepon
    public function setPhone($phone) {
        $this->phone = $phone;
    }

    // Metode untuk mendapatkan nomor telepon
    public function getPhone() {
        return $this->phone;
    }
}