<?php
namespace DesignPatterns\Employee;

include_once("Command.php");
include_once("Receiver.php");
use DesignPatterns\Command\Command;
use DesignPatterns\Receiver\Receiver;

class Employee implements Command
{
    /**
     * Execute command of getInformation for employee
     */
    private $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->getEmployeeInformation();
    }
}