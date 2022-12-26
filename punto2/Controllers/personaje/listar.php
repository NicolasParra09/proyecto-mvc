<?php 

require_once("../../model/personajeModel.php");

    // Obtener los valores
    $objPersonaje = new Personaje();
    $personajes = $objPersonaje->getAll();

    foreach($personajes as $data) {
        echo "<tr>
            <td>".$data['id_personaje']."</td>
            <td>".$data['nombre_per']."</td>
            <td>".$data['status_per']."</td>
            <td>".$data['direccion_per']."</td>
            <td>
                <button class='btn btn-success me-2 my-1' data-bs-toggle='modal' data-bs-target='#ModalEdit' onclick=Editar('".$data['id_personaje']."')>
                <i class='fa-solid fa-pen-to-square'></i> Editar</button>
                <button class='btn btn-danger me-2 my-1' onclick=Eliminar('".$data['id_personaje']."')>
                <i class='fa-solid fa-trash'></i> Eliminar</button>
            </td>
        </tr>";
    }

?>