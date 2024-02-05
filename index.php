<?php

class Movie
{
    // Variabili d'istanza
    public $title;
    public $genre;
    public $releaseYear;

    // Costruttore
    public function __construct($title, $genre, $releaseYear)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->releaseYear = $releaseYear;
    }

    // Metodo
    public function displayMovieInfo()
    {
        echo "Title: {$this->title}\n";
        echo "Genre: {$this->genre}\n";
        echo "Release Year: {$this->releaseYear}\n";
        echo "\n";
    }
}

// Istanziamento di due oggetti Movie
$movie1 = new Movie("The Shawshank Redemption", "Drama", 1994);
$movie2 = new Movie("Inception", "Sci-Fi", 2010);

// Stampare a schermo i valori delle proprietà dei due oggetti
echo "Movie 1:\n";
$movie1->displayMovieInfo();

echo "Movie 2:\n";
$movie2->displayMovieInfo();

?>
