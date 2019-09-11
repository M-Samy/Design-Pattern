<?php
namespace DesignPatterns\Command;


interface Command
{
    // Contains what we will execute.
    public function execute();
}