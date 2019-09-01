<?php


namespace AdapterPattern\BookAdapter;
include_once("Book.php");
use AdapterPattern\Book\Book;

class BookAdapter
{
    private $book;

    function __construct(Book $book)
    {
        $this->book = $book;
    }

    function getBookInfo() {
        return $this->book->getTitle() . ' By ' . $this->book->getAuthor();
    }
}