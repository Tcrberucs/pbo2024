<?php
class tabung
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

$tabung = new Tabung(5, 13); 
echo "Volume Tabung dengan jari-jari {$tabung->jari_jari} cm dan tinggi {$tabung->tinggi} cm: " . $tabung->volume() . " cm³\n";