<?php
require_once('Movie.php');
$film = new Movie('Indiana jones', 1989, true);

//var_dump($film->getTitle());


//changer le titre du film pour Indiana Jones et la dernière croisade
$film->setTitle('Indiana Jones et la dernière croisade');
var_dump($film->getTitle());
/*
$film->setTitle('Indy');
$film->setReleaseDate(1989);
var_dump($film);
echo '<br>';
$movie = new Movie();
var_dump($movie->getActor());
echo '<br>';

$movie->addActor('Michael');
var_dump($movie->getActor());




echo '<br>';
$favourite->toggle(true, false);
var_dump($favourite);
*/
var_dump($film->isRecent());

$film->addActor('Sean Connery');
var_dump($film->getActor());

var_dump ($film->getFavourite() . '<br>');
$film->toggleFavourite();
var_dump($film->getFavourite());