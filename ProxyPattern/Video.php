<?php


namespace DesignPatterns\Video;

include_once("IVideo.php");
use DesignPatterns\IVideo\IVideo;

class Video implements IVideo
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }

    function Play()
    {
        print("Playing video with title " . $this->title);
    }
}