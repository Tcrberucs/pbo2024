<?php

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

// Contoh penggunaan kelas Publisher
$publisher = new Publisher("Penerbit ZYX", "Jl. lorem ipsum", 123456789);

// Menampilkan informasi penerbit
echo "Nama Penerbit: " . $publisher->name . "\n";
echo "Alamat Penerbit: " . $publisher->address . "\n";
echo "Nomor Telepon Penerbit: " . $publisher->getPhone() . "\n";

// Mengubah nomor telepon
$publisher->setPhone(987654321);
echo "Nomor Telepon Penerbit setelah diubah: " . $publisher->getPhone() . "\n";

?>