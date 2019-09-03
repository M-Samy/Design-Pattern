<?php


namespace DesignPatterns\Email;

include_once("emailBody.php");
use DesignPatterns\emailBody\emailBody;

class Email implements emailBody
{
    public function loadBody()
    {
        echo "Normal email";
    }
}