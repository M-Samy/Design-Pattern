<?php
include_once("GuitaristMember.php");
include_once("PianistMember.php");
use DesignPatterns\GuitaristMember\GuitaristMember;
use DesignPatterns\PianistMember\PianistMember;

$guitarist = new GuitaristMember();
print($guitarist->makeTheShow());

$pianist = new PianistMember();
print($pianist->makeTheShow());