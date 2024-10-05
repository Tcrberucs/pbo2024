<?php

namespace App\Guest;

/**
 * Class HomePage
 *
 * Kelas ini merepresentasikan halaman depan untuk pengguna tamu (guest).
 *
 * @package App\Guest
 */
class HomePage
{
    /**
     * Menampilkan halaman depan untuk pengguna tamu.
     *
     * @return void
     */
    public function tampil(): void
    {
        echo "Halaman depan guest";
    }
}
