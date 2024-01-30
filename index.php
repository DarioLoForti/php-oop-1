<?php

class Movie{
    public $title;
    public $genre= [];
    public $year;
    public $director;
    public $duration;
    public $country_production;
    public $oscar;

    function __construct($_title, $_genres, $_year){
        $this->title = $_title;
        $this->genre = $_genres;
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

$movie_1 = new Movie("Interstellar", ["Fantacienza"], "2014");

$movie_1->director            = "Christopher Nolan";
$movie_1->duration            = "168 minuti";
$movie_1->country_production = "USA";
$movie_1->setOscar(5);


$movie_2 = new Movie("The Wolf of Wall Street", ["Drammatico"], "2014");

$movie_2->director            = "Martin Scorsese";
$movie_2->duration            = "180 minuti";
$movie_2->country_production = "USA";
$movie_2->setOscar(5);


$movie_3 = new Movie("Il Signore degli Anelli", ["Fantastico", "Avventura"], "2003");

$movie_3->director            = "Peter Jackson";
$movie_3->duration            = "127 minuti";
$movie_3->country_production = "USA";
$movie_3->setOscar(5);


$movie_4 = new Movie("Il Gladiatore", ["Storico", "Drammatico"], "2000");

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


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1>Movie List</h1>
        </div>
        <?php foreach ($movies as $movie) { ?>
            <div class="col-6 my-5">
                <div class="card">
                    <div class="card-body">
                        <h2>Titolo: <?php echo $movie->title; ?></h2>
                        <h5>Genere: <?php echo implode(", ", $movie->genre); ?></h5> 
                        <h5>Anno di uscita: <?php echo $movie->year; ?></h5>
                        <h5>Regista: <?php echo $movie->director; ?></h5>
                        <h5>Durata: <?php echo $movie->duration; ?></h5> 
                        <h5>Paese di produzione: <?php echo $movie->country_production ?></h5> 
                        <h5>Oscar: <?php echo $movie->oscar; ?></h5>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
    
</body>
</html>