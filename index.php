<?php
class Movie {
    // Dichiarazione delle variabili d'istanza
    public $title;
    public $director;
    public $releaseYear;

    // Costruttore per inizializzare le variabili d'istanza
    function __construct($title, $director, $releaseYear) {
        $this->title = $title;
        $this->director = $director;
        $this->releaseYear = $releaseYear;
    }

    // Metodo per ottenere una descrizione del film
    function getDescription() {
        return "{$this->title} directed by {$this->director} released in {$this->releaseYear}.";
    }
}

// Creazione di due oggetti Movie
$movie1 = new Movie("The Matrix", "Lana Wachowski, Lilly Wachowski", 1999);
$movie2 = new Movie("Inception", "Christopher Nolan", 2010);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie oop</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div>
        <h1>Movies</h1>
        <p><?= $movie1->getDescription() ?></p>
        <p><?= $movie2->getDescription() ?></p>
    </div>
</body>
</html>