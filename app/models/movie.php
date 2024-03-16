<?php
class Movie
{
    public $title;
    public $overview;
    public $duration;
    public $cast;

    public function __construct($title, $overview, $duration, $cast)
    {
        // select an object property inside a class using the $this variable
        // The $this always refers to the object in wich it was used
        $this->title = $title;
        $this->overview = $overview;
        $this->duration = $duration;
        $this->cast = $cast;
    }

    public function getCast()
    {
        return $this->cast;
    }
}
