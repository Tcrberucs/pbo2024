<?php
class kerucut
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

$kerucut = new Kerucut(5, 6); // jari-jari 4 cm, tinggi 10 cm
echo "Volume Kerucut dengan jari-jari {$kerucut->jari_jari} cm dan tinggi {$kerucut->tinggi} cm: " . $kerucut->volume() . " cm³\n";