<?php
namespace DesignPatterns\Company;

include_once("Command.php");
include_once("Receiver.php");
use DesignPatterns\Command\Command;
use DesignPatterns\Receiver\Receiver;

class Company implements Command
{
    /**
     * Execute command of getInformation for company
     */

    private $receiver;

    public function __construct(Receiver $receiver)
    {
        $this->receiver = $receiver;
    }

    public function execute()
    {
        $this->receiver->getCompanyInformation();
    }
}