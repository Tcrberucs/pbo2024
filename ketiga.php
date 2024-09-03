<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;


    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }


    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }


    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    // Konstruktor
    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    // Metode untuk menghitung volume
    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    // Konstruktor
    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    // Metode untuk menghitung volume
    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    // Konstruktor
    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    // Metode untuk menghitung volume
    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

// Membuat objek dari kelas Bola
$lingkaran = new Lingkaran(5); 
echo "luas Lingkaran dengan jari-jari {$lingkaran->jari_jari} cm: " . $lingkaran->luas() . " cm³\n";
echo "keliling Lingkaran dengan jari-jari {$lingkaran->jari_jari} cm: " . $lingkaran->keliling() . " cm³\n";

// Membuat objek dari kelas Bola
$bola = new Bola(3); 
echo "Volume Bola dengan jari-jari {$bola->jari_jari} cm: " . $bola->volume() . " cm³\n";

// Membuat objek dari kelas Tabung
$tabung = new Tabung(5, 13); 
echo "Volume Tabung dengan jari-jari {$tabung->jari_jari} cm dan tinggi {$tabung->tinggi} cm: " . $tabung->volume() . " cm³\n";

// Membuat objek dari kelas Kerucut
$kerucut = new Kerucut(5, 6); // jari-jari 4 cm, tinggi 10 cm
echo "Volume Kerucut dengan jari-jari {$kerucut->jari_jari} cm dan tinggi {$kerucut->tinggi} cm: " . $kerucut->volume() . " cm³\n";

?>