<?php

require_once __DIR__ . '/../models/Movie.php';

$movie1 = new Movie('The Godfather', 1972, ['Inglese', 'Italiano'], ['noir', 'drammatico', 'gangster'], 'padrino.jpg');
$movie2 = new Movie('Riders of the Lost Ark', 1981, ['Inglese'], ['avventura', 'azione', 'fantastico', 'commedia'], 'predatori.jpg');
$movie3 = new Movie('Forrest Gump', 1994, ['Inglese'], ['drammatico', 'commedia'], 'forrest.jpg');

$movies = [$movie1, $movie2, $movie3];
