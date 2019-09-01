<?php

namespace DesignPatterns\GuitaristMember;

include_once("BandMembers.php");
include_once("Guitarist.php");
use DesignPatterns\BandMembers\BandMembers;
use DesignPatterns\Guitarist\Guitarist;

class GuitaristMember extends BandMembers
{
    public function makeMusician()
    {
        return new Guitarist();
    }
}