<?php
include_once("Information.php");
include_once("Employee.php");
include_once("Company.php");
include_once("Receiver.php");

use DesignPatterns\Company\Company;
use DesignPatterns\Employee\Employee;
use DesignPatterns\Information\Information;
use DesignPatterns\Receiver\Receiver;

$receiver1 = new Receiver();

$employee_command = new Employee($receiver1);
$company_command = new Company($receiver1);

$information_control = new Information();
$information_control->setCommand($employee_command);
$information_control->getInfo();

$information_control->setCommand($company_command);
$information_control->getInfo();