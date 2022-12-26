<?php

ini_set('allow_url_fopen', 1);

$episodeNumber = $_POST['episode_number']; // Número del episodio a obtener

// API
$json = file_get_contents('https://rickandmortyapi.com/api/episode/' . $episodeNumber);

// Decodificar el JSON a un objeto PHP
$episode = json_decode($json);


$episodeJson = json_encode($episode, JSON_PRETTY_PRINT);
echo $episodeJson;


/* echo '<pre>';
var_dump($episode);
echo '</pre>';
 */

echo '<br>';
echo 'Episodio: ' . $episode->episode . '<br>';
echo 'Nombre del episodio: ' . $episode->name . '<br>';

?>

<a href="./"><h2>Regresar</h2></a>