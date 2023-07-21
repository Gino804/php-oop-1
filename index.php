<?php

class Actor
{
    public $id;
    public $firstName;
    public $lastName;
    public $age;

    function __construct($id, $firstName, $lastName, $age)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$actor1 = new Actor(12, 'Tom', 'Hanks', 67);
$actor2 = new Actor(42, 'Stanley', 'Tucci', 62);
$actor3 = new Actor(88, 'Mark', 'Ruffalo', 55);
$actor4 = new Actor(127, 'Tom', 'Holland', 27);

class Movie
{
    public $id;
    public $title;
    public $length;
    public $releaseYear;
    public $cast;

    function __construct($id, $title, $length, $releaseYear, array $cast)
    {
        $this->id = $id;
        $this->title = $title;
        $this->length = $length;
        $this->releaseYear = $releaseYear;
        $this->cast = $cast;
    }

    function setTitle($title)
    {
        $this->title = $title;
    }
}

$movie1 = new Movie(243, 'The Terminal', 123, 2004, [$actor1, $actor2]);
$movie2 = new Movie(675, 'Avengers: Endgame', 182, 2019, [$actor3, $actor4]);

$movies = [$movie1, $movie2];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>

<body>
    <?php foreach ($movies as $movie) : ?>
        <ul>
            <li><b>Titolo: </b><?= $movie->title ?></li>
            <li><b>Durata: </b><?= $movie->length ?> minuti</li>
            <li><b>Anno di uscita: </b><?= $movie->releaseYear ?></li>
            <li><b>Cast: </b>
                <?php
                foreach ($movie->cast as $actor) {
                    $paragraph = $actor->getFullName() . ' (' . $actor->age . ' anni)';
                    if ($actor->id != $movie->cast[count($movie->cast) - 1]->id) $paragraph .= ', ';
                    echo $paragraph;
                }
                ?>
            </li>
        </ul>
    <?php endforeach ?>
</body>

</html>