<?php

require_once("../model/personajeModel.php");

$objPersonaje = new Personaje();

    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            if(isset($_GET['id'])) {
                echo json_encode($objPersonaje->getID($_GET['id']));
               
            // resultado de json_encode
            } else { 
            echo json_encode($objPersonaje->getAll());
            }
            break;
        case 'POST':
        $json = file_get_contents('php://input');
        $datos = json_decode($json);
                if($datos != NULL) {
                    
                    if($objPersonaje->insert($datos->id_personaje, $datos->nombre_per, $datos->status_per, $datos->direccion_per)) {
                        http_response_code(200);
                    }
                    else {
                        http_response_code(400);
                    }
                }
                else {
                    http_response_code(405);
                }
            break;
            case 'PUT':
                $json = file_get_contents('php://input');
                $datos = json_decode($json);
                        if($datos != NULL) {
                            
                            if($objPersonaje->update($datos->id_personaje, $datos->nombre_per, $datos->status_per, $datos->direccion_per)) {
                                http_response_code(200);
                            }
                            else {
                                http_response_code(400);
                            }
                        }
                        else {
                            http_response_code(405);
                        }
            break;
            case 'DELETE':
                if(isset($_GET['id'])){
                    if($objPersonaje->delete($_GET['id'])){
                        http_response_code(200);
                    }
                    else {
                        http_response_code(400);
                    }
                }
                else {
                    http_response_code(405);
                }
            break;       
        

        default:  
            
            http_response_code(405);
            
            break;
    }


?>