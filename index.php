<?php

class Movie{
    public $title;
    public $genre;
    public $year;
    public $director;
    public $duration;
    public $country_production;
    public $oscar;

    function __construct($_title, $_genre, $_year){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;

    }
    
    public function setOscar($vote){
        if($vote > 4){
            $this->oscar = "Si";
        }
        else{
            $this->oscar = "No";
        }
    }

}

$movie_1 = new Movie("Interstellar", "Fantacienza", "2014");

$movie_1->director            = "Christopher Nolan";
$movie_1->duration            = "168 minuti";
$movie_1->country_production = "USA";
$movie_1->setOscar(5);


$movie_2 = new Movie("The Wolf of Wall Street", "drammatico", "2014");

$movie_2->director            = "Martin Scorsese";
$movie_2->duration            = "180 minuti";
$movie_2->country_production = "USA";
$movie_2->setOscar(5);


$movie_3 = new Movie("Il Signore degli Anelli", "Fantastico", "2003");

$movie_3->director            = "Peter Jackson";
$movie_3->duration            = "127 minuti";
$movie_3->country_production = "USA";
$movie_3->setOscar(5);


$movie_4 = new Movie("Il Gladiatore", "Storico", "2000");

$movie_4->director            = "Ridley Scott";
$movie_4->duration            = "170 minuti";
$movie_4->country_production = "USA";
$movie_4->setOscar(5);

// CREO ARRAY DI FILM

$movies = [
    $movie_1,
    $movie_2,
    $movie_3,
    $movie_4,
];

// CICLO ARRAY DI FILM PER MOSTRARLI A VIDEO

foreach($movies as $movie){
    echo "<div>".$movie->title."<br>".$movie->genre."<br>".$movie->year."<br>".$movie->director."<br>".$movie->duration."<br>".$movie->country_production."<br>".$movie->oscar."</div>"."<br>";
}




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