<?php

namespace BuilderPattern;

include_once("PersonBuilderInterface.php");
include_once("Person.php");

class EmployedMaleBuilder implements PersonBuilderInterface
{
    private $emp;

    public function __construct()
    {
        $this->emp = new Person();
    }

    public function setGender()
    {
        $this->emp->gender = Person::GENDER_MALE;
    }

    public function setEmployed()
    {
        $this->emp->employed = "True";
    }

    public function getResult()
    {
        return $this->emp;
    }
}