<?php
require_once __DIR__ . '/../app/models/Movie.php';
require_once __DIR__ . '/../app/models/Genre.php';
$movies = [
    new Movie(
        'Il padrino',
        'Il padrino lorem ipsum dolor',
        120,
        [
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
        ],
        [new Genre('Drammatico', 'drama'), new Genre('Mafioso', 'mafioso')]
    ), new Movie(
        'Matrix',
        'Matrix lorem psum dolor',
        150,
        [
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
        ],
        [new Genre('Azione', 'action'), new Genre('Fantasy', 'fantasy')]
    )
];
