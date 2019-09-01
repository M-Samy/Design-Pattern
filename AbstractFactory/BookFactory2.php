<?php


namespace DesignPatterns\AbstractFactory;
include_once("AbstractBookFactory.php");
include_once("Factory2PHPBook.php");
include_once("Factory2PythonBook.php");


class BookFactory2 implements AbstractBookFactory
{
    public function makePHPBook()
    {
        return new Factory2PHPBook();
    }

    public function makePythonBook()
    {
        return new Factory2PythonBook();
    }
}