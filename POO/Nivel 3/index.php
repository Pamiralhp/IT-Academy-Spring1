<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./CSS/Style.css">
</head>
<body>
    <header>
        <h1>Movies and Theaters</h1>
    </header>
    <container>
<?php

include_once "./Movie.php";
include_once "./Theater.php";


$pelicula1 = new Movie("Pelicula 1", 120, "Director 1");
$pelicula2 = new Movie("Pelicula 2", 140, "Director 2");
$pelicula3 = new Movie("Pelicula 3", 110, "Director 1");


$cine1 = new Theater("Cine A", "Población A");
$cine1->addMovie($pelicula1);
$cine1->addMovie($pelicula2);

$cine2 = new Theater("Cine B", "Población B");
$cine2->addMovie($pelicula2);
$cine2->addMovie($pelicula3);

$theaters = [$cine1, $cine2];
$director1 = "Director 1";
$directorMovies = Theater::findDirector($director1, $theaters);

echo $cine1->showMovies() ."\n";
echo "<h2>Peliculas de: $director1: </h2>";
echo "<p class='list'>" . $directorMovies . "</p>";
?>
    </container>
</body>
</html>