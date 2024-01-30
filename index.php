<?php

class Movie{
    public $title;
    public $genre;
    public $year;
    public $director;
    public $duration;
    public $country_production;

    function __construct($_title, $_genre, $_year){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;

    }

}

$movie_1 = new Movie("Interstellar", "Fantacienza", "2014");

$movie_1->director            = "Christopher Nolan";
$movie_1->duration            = "168 minuti";
$movie_1->country_production = "USA";

echo $movie_1->title." ".$movie_1->genre." ".$movie_1->year." ".$movie_1->director." ".$movie_1->duration." ".$movie_1->country_production;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>