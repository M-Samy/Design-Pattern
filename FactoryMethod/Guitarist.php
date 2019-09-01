<?php

namespace DesignPatterns\Guitarist;

include_once("MusicianInterface.php");
use DesignPatterns\FactoryMethod\MusicianInterface;

class Guitarist implements MusicianInterface
{
    public function Plays()
    {
        return "Playing Guitar";
    }
}