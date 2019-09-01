<?php


namespace AdapterPattern\Book;


class Book
{
    private $author;
    private $title;

    function __construct($book_author, $book_title)
    {
        $this->author = $book_author;
        $this->title = $book_title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }
}