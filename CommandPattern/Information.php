<?php
namespace DesignPatterns\Information;

include_once("Command.php");
use DesignPatterns\Command\Command;

class Information
{
    /**
     * This is an invoker which call the commands
     */
    private $command;

    public function setCommand(Command $command) {
        $this->command = $command;
    }

    public function getInfo() {
        $this->command->execute();
    }

}