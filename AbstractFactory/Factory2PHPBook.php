<?php


namespace DesignPatterns\AbstractFactory;
include_once("BookFactory2.php");

class Factory2PHPBook extends BookFactory2
{
    private $author;
    private $title;
    function __construct() {
        $this->author = 'Author1 From Factory2 PHP';
        $this->title = 'Managing PHP Factory2';
    }
    function getAuthor() {
        print($this->author);
    }
    function getTitle() {
        print($this->title);
    }
}