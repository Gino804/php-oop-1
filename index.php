<?php

class Movie
{
    public $title;
    public $length;
    public $releaseYear;

    function __construct($title, $length, $releaseYear)
    {
        $this->title = $title;
        $this->length = $length;
        $this->releaseYear = $releaseYear;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }
}

$movie = new Movie('The Terminal', '123', '2004');
$movie2 = new Movie('Avengers: Endgame', '182', '2019');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <ul>
        <li><b>Titolo: </b><?= $movie->title ?></li>
        <li><b>Durata: </b><?= $movie->length ?> minuti</li>
        <li><b>Anno di uscita: </b><?= $movie->releaseYear ?></li>
    </ul>

    <ul>
        <li><b>Titolo: </b><?= $movie2->title ?></li>
        <li><b>Durata: </b><?= $movie2->length ?> minuti</li>
        <li><b>Anno di uscita: </b><?= $movie2->releaseYear ?></li>
    </ul>
</body>

</html>