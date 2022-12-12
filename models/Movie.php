<?php
class Movie
{
    public $title;
    public $genre;
    public $duration;

    function __construct(string $_title, string $_genre, string $_duration)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration;
    }
}