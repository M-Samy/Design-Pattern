<?php

namespace DesignPatterns\AbstractFactory\Factory1PHPBook;
include_once("BookFactory1.php");

use DesignPatterns\AbstractFactory\BookFactory1\BookFactory1;

class Factory1PHPBook extends BookFactory1
{
    private $author;
    private $title;
    function __construct() {
        $this->author = 'Author1 From Factory1';
        $this->title = 'Managing PHP Factory1';
    }
    function getAuthor() {
        print($this->author);
    }
    function getTitle() {
        print($this->title);
    }
}