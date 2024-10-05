<?php
namespace App\Admin;

class Pegawai {
    protected int $nip;
    public string $nama;
    private int $no_hp;
    public string $alamat;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn(): bool {
        // Implementasi cek in
        return true;
    }

    public function cekOut(): bool {
        // Implementasi cek out
        return true;
    }

    protected function getNoHp(): int {
        return $this->no_hp;
    }

    public function setNoHp(int $no_hp): void {
        $this->no_hp = $no_hp;
    }
}
