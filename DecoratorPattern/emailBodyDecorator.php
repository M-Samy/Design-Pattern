<?php


namespace DesignPatterns\emailBodyDecorator;

include_once("emailBody.php");
use DesignPatterns\emailBody\emailBody;

class emailBodyDecorator implements emailBody
{
    protected $body;

    public function __construct(emailBody $body)
    {
        $this->body = $body;
    }

    public function loadBody() {
        echo "PARENT";
    }
}