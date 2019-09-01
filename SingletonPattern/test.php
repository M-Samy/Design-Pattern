<?php

include_once("Database.php");

use SingletonPattern\Database;

$db = Database::getInstance();
var_dump($db);

$db2 = Database::getInstance();
var_dump($db2);
