<?php
    $data = file_get_contents("php://input");

    require_once("../../model/personajeModel.php");

    // Obtener los valores
    $objPersonaje = new Personaje();
    $personajes = $objPersonaje->getID($data);
    echo json_encode($personajes);

?>