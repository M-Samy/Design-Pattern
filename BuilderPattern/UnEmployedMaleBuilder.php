<?php


namespace BuilderPattern;


class UnEmployedMaleBuilder implements PersonBuilderInterface
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
        $this->emp->employed = "False";
    }

    public function getResult()
    {
        return $this->emp;
    }
}