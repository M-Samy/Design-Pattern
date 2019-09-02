<?php

include_once("VideoProxy.php");
use DesignPatterns\VideoProxy\VideoProxy;


$proxies = array();

for ($i = 0; $i < 10; $i++) {
    $proxies[$i] = new VideoProxy("video" . $i);
}

$video = $proxies[9]->Play();