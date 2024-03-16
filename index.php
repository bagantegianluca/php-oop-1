<?php

/**
 * Class Movie
 */
class Movie
{
    public $title;
    public $overview;
    public $duration;
    public $cast;
}

$padrino = new Movie();

// Write  values to each property of the object
$padrino->title = 'Il padrino';
$padrino->overview = 'Il padrino lorem ipsum dolor';
$padrino->duration = 120;
$padrino->cast = 'Al Pacino';

var_dump($padrino);

// Create a second instance of movie
$matrix = new Movie();
$matrix->title = 'Matrix';
$matrix->overview = 'Matrix';
$matrix->duration = 120;
$matrix->cast = 'Matrix';

var_dump($matrix);
