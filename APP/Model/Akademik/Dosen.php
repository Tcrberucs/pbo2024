<?php

namespace App\Model\Akademik;

use App\Model\Akademik\Pegawai;

/**
 * Class Dosen
 *
 * Kelas ini merepresentasikan seorang dosen dalam sistem akademik.
 *
 * @package App\Model\Akademik
 * @author Dian Prawira <wiradian84@gmail.com>
 */
class Dosen extends Pegawai
{
    /**
     * Nomor Induk Dosen Nasional (NIDN)
     *
     * @var int
     */
    private int $nidn;

    /**
     * Konstruktor untuk membuat objek Dosen baru
     *
     * @param int $nip Nomor Induk Pegawai
     * @param string $nama Nama lengkap dosen
     * @param int $no_hp Nomor handphone dosen
     * @param string $alamat Alamat lengkap dosen
     * @param string $nidn Nomor Induk Dosen Nasional
     */
    public function __construct(int $nip, string $nama, int $no_hp, string $alamat, string $nidn)
    {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
    }

    /**
     * Menampilkan pesan bahwa dosen sedang mengajar
     *
     * @return void
     */
    public function mengajar(): void
    {
        echo $this->nama . " sedang mengajar perkuliahan";
    }
}
