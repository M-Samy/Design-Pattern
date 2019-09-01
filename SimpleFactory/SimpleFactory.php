<?php

namespace DesignPatterns\SimpleFactory;

class CarFactory {
    public function __construct() {}

    public static function build ($type) {
        if($type == '') {
            throw new Exception('Invalid Car Type.');
        } else {

            $className = lcfirst($type);

            // Assuming Class files are already loaded using autoload concept
            if(class_exists($className)) {
                return new $className();
            } else {
                throw new Exception('Car type not found.');
            }
        }
    }
}