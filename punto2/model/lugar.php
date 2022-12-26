<?php

    require_once ("conexion.php");

    class Lugar extends Conexion{
        private $intID;
        private $strNombre;
        

        public function __construct()
        {
          // Conectamos a la base de datos y guardamos la conexión en $this->PDO
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
        }

        // Obtenemos Lugares
        public function getAll() {
            $sql = "SELECT * FROM lugares";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchAll(PDO::FETCH_ASSOC);
            return $request;
        }

        // Obtener un Personaje por su ID
            public function getID(int $id) {
                $sql = "SELECT * FROM lugares WHERE id_lugar = ?";
                $stmt = $this->conexion->prepare($sql);
                $stmt->execute([$id]);
                $request = $stmt->fetch(PDO::FETCH_ASSOC);
                return $request;
            }

        public function insert(int $id, string $nombre){

            $this->intID = $id;
            $this->strNombre = $nombre;


            
            // Verificar si ya existe una fila con los mismos valores
            $check_sql = "SELECT * FROM lugares WHERE id_lugar = ? AND nombre_lug = ?";
            $check_stmt = $this->conexion->prepare($check_sql);
            $check_stmt->execute([$this->intID, $this->strNombre]);
            if ($check_stmt->rowCount() > 0) {
              // Si ya existe una fila con los mismos valores
              echo "Error: Ya existe una fila con los mismos valores";
              return;
            }
          
            // Si no existe una fila con los mismos valores, continuar con la inserción
            try {
              $sql = "INSERT INTO lugares(id_lugar, nombre_lug) VALUES(?,?)";
              $insert = $this->conexion->prepare($sql);
              $arrayName = array($this->intID, $this->strNombre);
              $resinsert = $insert->execute($arrayName);
              
              if ($resinsert) {
                exit();
              } else {
                // Si hubo un error al ejecutar la consulta de inserción, mostrar un mensaje de error
                echo "Error al insertar el producto en la base de datos";
              }
            } catch (PDOException $e) {
              // Si se produce una excepción PDO, mostrar el mensaje personalizado
              echo "Error: Ya existe una fila con los mismos valores";
            }
          }


            
            // Actualizar un Personaje
            public function update(int $id, string $nombre) {
                $this->intID = $id;
                $this->strNombre = $nombre;
            
                $sql = "UPDATE lugares SET nombre_lug = ? WHERE id_lugar = ?";
                $stmt = $this->conexion->prepare($sql);
                $resupdate = $stmt->execute([$this->strNombre, $this->intID]);
            
                if ($resupdate) {
                    exit();
                } else {
                    // Si hubo un error al ejecutar la consulta de actualización
                    echo "Error al actualizar el Personaje en la base de datos";
                }
            }
            
            
            // Eliminar un Lugar
            public function delete(int $id) {
                $sql = "DELETE FROM lugares WHERE id_lugar = ?";
                $stmt = $this->conexion->prepare($sql);
                $resdelete = $stmt->execute([$id]);
            
                if ($resdelete) {
                exit();
                } else {
                // Si hubo un error al ejecutar la consulta de eliminación
                echo "Error al eliminar el Personaje en la base de datos";
                }
            }

    

    }


?>