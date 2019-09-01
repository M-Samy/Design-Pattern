<?php

namespace DesignPatterns\PianistMember;


include_once("BandMembers.php");
include_once("Pianist.php");
use DesignPatterns\BandMembers\BandMembers;
use DesignPatterns\Pianist\Pianist;

class PianistMember extends BandMembers
{
    public function makeMusician()
    {
        return new Pianist();
    }
}