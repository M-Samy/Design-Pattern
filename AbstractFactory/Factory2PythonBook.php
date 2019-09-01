<?php


namespace DesignPatterns\AbstractFactory;


class Factory2PythonBook extends BookFactory2
{
    private $author;
    private $title;
    function __construct() {
        $this->author = 'Author2 From Factory2 Python';
        $this->title = 'Managing Python Factory2';
    }
    function getAuthor() {
        print($this->author);
    }
    function getTitle() {
        print($this->title);
    }
}