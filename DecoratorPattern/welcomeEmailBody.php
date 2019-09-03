<?php


namespace DesignPatterns\welcomeEmailBody;

include_once("emailBodyDecorator.php");
use DesignPatterns\emailBodyDecorator\emailBodyDecorator;

class welcomeEmailBody extends emailBodyDecorator
{
    public function loadBody()
    {
        echo "This is welcome email";
        $this->body->loadBody();
    }

}