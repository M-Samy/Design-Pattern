<?php


namespace DesignPatterns\jsonService;

include_once("Handler.php");
use DesignPatterns\Handler\Handler;

class jsonService implements Handler
{
    // Reference to the next handler
    private $successor;

    public function handleRequest($request)
    {
        if ($request->getService() == "JSON")
        {
            echo ("JSON Parsing!");
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