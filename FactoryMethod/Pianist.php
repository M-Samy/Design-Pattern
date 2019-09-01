<?php

namespace DesignPatterns\Pianist;

include_once("MusicianInterface.php");
use DesignPatterns\FactoryMethod\MusicianInterface;

class Pianist implements MusicianInterface
{
    public function Plays()
    {
        return "Playing Piano";
    }
}