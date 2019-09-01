<?php


namespace BuilderPattern;


/**
 * The director class is part of the builder patter, the build method should be passed a builder.
 * The build method should than call all of the builder methods and return a Person object
 */

class PersonDirector
{
    public function build(PersonBuilderInterface $builder){
        $builder->setEmployed();
        $builder->setGender();
        return $builder->getResult();
    }
}