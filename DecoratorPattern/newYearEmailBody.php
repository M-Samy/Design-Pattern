<?php


namespace DesignPatterns\newYearEmailBody;

include_once("emailBodyDecorator.php");
use DesignPatterns\emailBodyDecorator\emailBodyDecorator;

class newYearEmailBody extends emailBodyDecorator
{
    public function loadBody()
    {
        echo "This is new year email";
        $this->body->loadBody();
    }

}