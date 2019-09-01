<?php
include_once("PersonDirector.php");
include_once("EmployedMaleBuilder.php");
include_once("EmployedFemaleBuilder.php");
include_once("UnEmployedMaleBuilder.php");
include_once("UnEmployedFemaleBuilder.php");

use BuilderPattern\EmployedFemaleBuilder;
use BuilderPattern\EmployedMaleBuilder;
use BuilderPattern\PersonDirector;
use BuilderPattern\UnEmployedMaleBuilder;
use BuilderPattern\UnEmployedFemaleBuilder;

$director = new PersonDirector();
$maleEmployedPerson = new EmployedMaleBuilder();
$femaleEmployedPerson = new EmployedFemaleBuilder();

$maleUnEmployedPerson = new UnEmployedMaleBuilder();
$femaleUnEmployedPerson = new UnEmployedFemaleBuilder();

$employedMale = $director->build($maleEmployedPerson);

var_dump($employedMale);