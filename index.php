<?php

class Movie {
    private $title;
    private $genre;
    private $year;

    public function __construct($title, $genre, $year) {
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getGenre() {
        return $this->genre;
    }

    public function getYear() {
        return $this->year;
    }
}

$movie1 = new Movie("The Shawshank Redemption", "Drama", 1994);
$movie2 = new Movie("Inception", "Action", 2010);

echo "Movie 1: " . $movie1->getTitle() . " (" . $movie1->getGenre() . ", " . $movie1->getYear() . ")" . "<br>";
echo "Movie 2: " . $movie2->getTitle() . " (" . $movie2->getGenre() . ", " . $movie2->getYear() . ")" . "<br>";

?>