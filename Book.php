<?php

class book
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