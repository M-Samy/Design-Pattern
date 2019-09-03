<?php

include_once("Email.php");
include_once("welcomeEmailBody.php");
include_once("newYearEmailBody.php");
use DesignPatterns\Email\Email;
use DesignPatterns\newYearEmailBody\newYearEmailBody;
use DesignPatterns\welcomeEmailBody\welcomeEmailBody;

/*
 *  Normal Email
 */
//$email = new Email();
//$email->loadBody();


/*
 *  Welcome email
 */
$email = new Email();
$email = new welcomeEmailBody($email);
$email = new newYearEmailBody($email);
$email->loadBody();

