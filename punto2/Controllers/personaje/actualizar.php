<?php

require_once("../../model/personajeModel.php");


     // Obtener los valores del formulario
     $id = $_POST['id'];
     $nombre = $_POST['nombre'];
     $status = $_POST['estado'];
     $direccion = $_POST['direccion'];
     
     $objPersonaje = new Personaje();
     // Llamar al método insert y pasarle los valores como argumentos
     $objPersonaje->update($id, $nombre, $status, $direccion);
?>