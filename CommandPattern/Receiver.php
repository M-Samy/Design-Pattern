<?php
namespace DesignPatterns\Receiver;


class Receiver
{
    /**
     * Receiver which receive the commands
     */
    public function getEmployeeInformation(){
        print("Employee");
    }

    public function getCompanyInformation(){
        print("Company");
    }

}