<?php
class Movie
{
    public $title;
    public $overview;
    public $duration;
    public $cast;
    public $genre;

    public function __construct($title, $overview, $duration, $cast, Genre $genre)
    {
        // select an object property inside a class using the $this variable
        // The $this always refers to the object in wich it was used
        $this->title = $title;
        $this->overview = $overview;
        $this->duration = $duration;
        $this->cast = $cast;
        $this->genre = $genre;
    }

    public function getCast()
    {
        return $this->cast;
    }
}
