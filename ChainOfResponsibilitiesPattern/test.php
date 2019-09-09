<?php

include_once("jsonService.php");
include_once("xmlService.php");
include_once("Request.php");

use DesignPatterns\jsonService\jsonService;
use DesignPatterns\xmlService\xmlService;
use DesignPatterns\Request\Request;

$json = new JsonService();
$xml = new XMLService();
$json->setSuccessor($xml);

$request = new Request("XML");
$json->handleRequest($request);