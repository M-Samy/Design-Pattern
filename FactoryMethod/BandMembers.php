<?php

namespace DesignPatterns\BandMembers;

abstract class BandMembers
{
    abstract public function makeMusician();

    public function makeTheShow() {
        $musician = $this->makeMusician();
        return $musician->plays();
    }
}