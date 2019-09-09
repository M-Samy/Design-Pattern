<?php


namespace DesignPatterns\xmlService;

include_once("Handler.php");
use DesignPatterns\Handler\Handler;

class xmlService implements Handler
{
    // Reference to the next handler
    private $successor;

    public function handleRequest($request)
    {
        if ($request->getService() == "XML")
        {
            echo ("XML Parsing");
        }
        else if ($this->successor != NULL)
        {
            $this->successor->handleRequest($request);
        }
    }

    public function setSuccessor($nextService)
    {
        $this->successor = $nextService;
    }
}