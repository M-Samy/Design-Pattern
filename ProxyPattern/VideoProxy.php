<?php


namespace DesignPatterns\VideoProxy;

include_once("IVideo.php");
include_once("Video.php");

use DesignPatterns\IVideo\IVideo;
use DesignPatterns\Video\Video;

class VideoProxy implements IVideo
{
    private $title;
    private $video;

    public function __construct($title)
    {
        $this->title = $title;
    }

    function Play()
    {
        if ($this->video == null) {
            $this->video = new Video($this->title);
        }
        $this->video->Play();
    }
}