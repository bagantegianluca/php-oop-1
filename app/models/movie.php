<?php
class Movie
{
    public function __construct(public string $title, public string $overview, public int $duration, public array $cast, public array $genres)
    {
        // select an object property inside a class using the $this variable
        // The $this always refers to the object in wich it was used
        $this->title = $title;
        $this->overview = $overview;
        $this->duration = $duration;
        $this->cast = $cast;
        $this->genres = $genres;
    }

    public function getCast()
    {
        return $this->cast;
    }
}
