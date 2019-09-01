<?php


namespace BuilderPattern;


/**
 * All builders should implement this interface.
 */
interface PersonBuilderInterface
{
    public function setGender();
    public function setEmployed();
    public function getResult();
}