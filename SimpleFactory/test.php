<?php

include_once("SimpleFactory.php");
use DesignPatterns\SimpleFactory\CarFactory;

class Toyota {
    public function __construct()
    {
        print "Initialize Toyota";
    }
}

class Mercedes {
    public function __construct()
    {
        print "Initialize Mercedes";
    }
}

$factory = new CarFactory();
$factory::build("toyota");
