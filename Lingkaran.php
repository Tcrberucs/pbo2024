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

$lingkaran = new Lingkaran(5); 
echo "luas Lingkaran dengan jari-jari {$lingkaran->jari_jari} cm: " . $lingkaran->luas() . " cm³\n";
echo "keliling Lingkaran dengan jari-jari {$lingkaran->jari_jari} cm: " . $lingkaran->keliling() . " cm³\n";