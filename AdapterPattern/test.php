<?php

include_once("Book.php");
include_once("BookAdapter.php");
use AdapterPattern\Book\Book;
use AdapterPattern\BookAdapter\BookAdapter;


$book = new Book("Sam Newman", "Building Micro-services");
$bookAdapter = new BookAdapter($book);

print($bookAdapter->getBookInfo());