<?php


namespace DesignPatterns\AbstractFactory;
include_once("BookFactory1.php");

class Factory1PythonBook extends BookFactory1
{
    private $author;
    private $title;
    function __construct() {
        $this->author = 'Author2 From Factory1 Python';
        $this->title = 'Managing Python Factory1';
    }
    function getAuthor() {
        print($this->author);
    }
    function getTitle() {
        print($this->title);
    }
}
