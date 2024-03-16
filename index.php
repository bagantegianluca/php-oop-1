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

$padrino = new Movie('Il padrino', 'Il padrino lorem ipsum dolor', 120, [
    "Marlon Brando",
    "Al Pacino",
    "James Caan",
    "Robert Duvall",
    "Diane Keaton",
    "Richard S. Castellano",
    "Abe Vigoda",
    "Sterling Hayden",
    "John Marley",
    "Richard Conte",
    "Al Lettieri",
    "Gianni Russo",
    "Talia Shire"
]);

// Write  values to each property of the object (or update existing values)
/* $padrino->title = 'Il padrino';
$padrino->overview = 'Il padrino lorem ipsum dolor';
$padrino->duration = 120;
$padrino->cast = ['Al Pacino']; */

// var_dump($padrino);

// Create a second instance of movie
// Write  values to each property of the object (or update existing values)
$matrix = new Movie('Matrix', 'Matrix lorem psum dolor', 150, [
    "Keanu Reeves",
    "Laurence Fishburne",
    "Carrie-Anne Moss",
    "Hugo Weaving",
    "Joe Pantoliano",
    "Gloria Foster",
    "Marcus Chong",
    "Julian Arahanga",
    "Matt Doran",
    "Belinda McClory",
    "Anthony Ray Parker",
    "Paul Goddard"
]);
/* $matrix->title = 'Matrix';
$matrix->overview = 'Matrix lorem psum dolor';
$matrix->duration = 120;
$matrix->cast = ['Keanu Reeves']; */

// var_dump($matrix);

// var_dump($padrino->getCast());
// var_dump($matrix->getCast());

$movies = [$matrix, $padrino];
// var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <!-- Import Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@latest/dist/css/bootstrap.min.css">
</head>

<body>

    <header class="bg-dark text-white">
        <nav>
            <a href=""></a>
        </nav>
    </header>

    <main class="mt-5">
        <section>
            <div class="container">
                <div class="row row-cols-1,row-cols-sm-3 g-3">
                    <?php foreach ($movies as $movie) : ?>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h3><?= $movie->title ?></h3>
                                    <p><?= $movie->overview ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
</body>

</html>