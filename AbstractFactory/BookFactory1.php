<?php

namespace DesignPatterns\AbstractFactory\BookFactory1;
include_once("AbstractBookFactory.php");
include_once("Factory1PHPBook.php");
include_once("Factory1PythonBook.php");

use DesignPatterns\AbstractFactory\AbstractBookFactory;
use DesignPatterns\AbstractFactory\Factory1PHPBook\Factory1PHPBook;
use DesignPatterns\AbstractFactory\Factory1PythonBook;


class BookFactory1 implements AbstractBookFactory
{
    public function makePHPBook()
    {
        return new Factory1PHPBook();
    }

    public function makePythonBook()
    {
        return new Factory1PythonBook();
    }
}