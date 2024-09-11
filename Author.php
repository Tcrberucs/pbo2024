<?php

class Author
{
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type): array {
        if ($type === 'name') {
            return ['name' => $this->name];
        } elseif ($type === 'description') {
            return ['description' => $this->description];
        } elseif ($type === 'all') {
            return [
                'name' => $this->name,
                'description' => $this->description,
            ];
        } else {
            return ['error' => 'Invalid type'];
        }
    }
}

$author = new Author("Tere Liye", "Penulis buku Bumi");

// Menampilkan nama penulis
echo "Menampilkan Nama Penulis:\n";
print_r($author->show('name'));

// Menampilkan deskripsi penulis
echo "Menampilkan Deskripsi Penulis:\n";
print_r($author->show('description'));

// Menampilkan semua informasi penulis
echo "Menampilkan Semua Informasi Penulis:\n";
print_r($author->show('all'));

// Menampilkan dengan tipe yang tidak valid
echo "Menampilkan Tipe yang Tidak Valid:\n";
print_r($author->show('invalid'));