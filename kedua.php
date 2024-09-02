<?php
function luasLingkaran(float $jari): float {
    return 3.14 * $jari * $jari;
}

function kelilingLingkaran(float $jari): float {
    return 2 * 3.14 * $jari;
}

function volumeBola(float $jari): float {
    return (4 / 3) * 3.14 * pow($jari, 3);
}

function volumeTabung(float $jari, float $tinggi): float {
    return 3.14 * $jari * $jari * $tinggi;
}

function volumeKerucut(float $jari, float $tinggi): float {
    return (1 / 3) * 3.14 * $jari * $jari * $tinggi;
}

echo "Pilih perhitungan:\n";
echo "1. Luas Lingkaran\n";
echo "2. Keliling Lingkaran\n";
echo "3. Volume Bola\n";
echo "4. Volume Tabung\n";
echo "5. Volume Kerucut\n";
$pilihan = readline('Masukkan pilihan (1-5): ');

switch ($pilihan) {
    case '1':
        echo "Masukkan jari-jari lingkaran: ";
        $jari = trim(fgets(STDIN));
        $luas = luasLingkaran((float)$jari);
        echo "Luas lingkaran dengan jari-jari $jari adalah {$luas}\n";
        break;
    
    case '2':
        echo "Masukkan jari-jari lingkaran: ";
        $jari = trim(fgets(STDIN));
        $keliling = kelilingLingkaran((float)$jari);
        echo "Keliling lingkaran dengan jari-jari $jari adalah {$keliling}\n";
        break;
    
    case '3':
        echo "Masukkan jari-jari bola: ";
        $jari = trim(fgets(STDIN));
        $volume = volumeBola((float)$jari);
        echo "Volume bola dengan jari-jari $jari adalah {$volume}\n";
        break;

    case '4':
        echo "Masukkan jari-jari tabung: ";
        $jari = trim(fgets(STDIN));
        echo "Masukkan tinggi tabung: ";
        $tinggi = trim(fgets(STDIN));
        $volume = volumeTabung((float)$jari, (float)$tinggi);
        echo "Volume tabung dengan jari-jari $jari dan tinggi $tinggi adalah {$volume}\n";
        break;

    case '5':
        echo "Masukkan jari-jari kerucut: ";
        $jari = trim(fgets(STDIN));
        echo "Masukkan tinggi kerucut: ";
        $tinggi = trim(fgets(STDIN));
        $volume = volumeKerucut((float)$jari, (float)$tinggi);
        echo "Volume kerucut dengan jari-jari $jari dan tinggi $tinggi adalah {$volume}\n";
        break;

    default:
        echo "Pilihan tidak valid. Silakan pilih antara 1 hingga 5.\n";
        break;
}
?>


