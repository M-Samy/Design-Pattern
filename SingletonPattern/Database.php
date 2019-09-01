<?php


namespace SingletonPattern;


class Database
{
    private static $db_instance;

    private function __construct(){}
    private function __clone(){}

    public static function getInstance(){
        if (!self::$db_instance){
            print("First time");
            self::$db_instance = new self();
        }

        return self::$db_instance;
    }
}