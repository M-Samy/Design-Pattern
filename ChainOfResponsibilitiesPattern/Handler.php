<?php


namespace DesignPatterns\Handler;


interface Handler
{
    public function handleRequest($request);
    public function setSuccessor($nextService);
}