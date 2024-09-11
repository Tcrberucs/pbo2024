<?php

class Book
{
    // Atribut
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    // Konstruktor
    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    // Metode untuk menampilkan semua informasi buku
    public function showAll() : array {
        return [
            'ISBN' => $this->ISBN,
            'Title' => $this->title,
            'Description' => $this->description,
            'Category' => $this->category,
            'Language' => $this->language,
            'Number of Pages' => $this->numberOfPage,
            'Author' => $this->author,
            'Publisher' => $this->publisher
        ];
    }

    // Metode untuk menampilkan detail buku berdasarkan ISBN
    public function detail($ISBN) : array {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return ['message' => 'Book not found.'];
        }
    }
}

// Contoh penggunaan kelas Book
$book1 = new Book(123456789, "Belajar Game", "Panduan lengkap untuk belajar Game.", "Teknologi", "Indonesia", 250, "Albert", "Penerbit ZYX");

// Menampilkan semua informasi buku
print_r($book1->showAll());

// Menampilkan detail buku berdasarkan ISBN
print_r($book1->detail(123456789));
print_r($book1->detail(987654321)); // Buku tidak ditemukan

?>