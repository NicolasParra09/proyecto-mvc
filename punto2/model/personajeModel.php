<?php

    require_once ("conexion.php");

    class Personaje extends Conexion{
        private $intID;
        private $strNombre;
        private $strStatus;
        private $strDireccion;
        

        public function __construct()
        {
          // Conectamos a la base de datos y guardamos la conexión en $this->PDO
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
        }




        // Obtenemos Personajes
        public function getAll() {
            $sql = "SELECT * FROM personajes";
            $execute = $this->conexion->query($sql);
            $request = $execute->fetchAll(PDO::FETCH_ASSOC);
            return $request;
        }

        // Obtener un Personaje por su ID
            public function getID(int $id) {
                $sql = "SELECT * FROM personajes WHERE id_personaje = ?";
                $stmt = $this->conexion->prepare($sql);
                $stmt->execute([$id]);
                $request = $stmt->fetch(PDO::FETCH_ASSOC);
                return $request;
            }



        public function insert(int $id, string $nombre, string $status, string $direccion){

            $this->intID = $id;
            $this->strNombre = $nombre;
            $this->strStatus = $status;
            $this->strDireccion = $direccion;

            
            // Verificar si ya existe una fila con los mismos valores de id_personaje y nombre_per
            $check_sql = "SELECT * FROM personajes WHERE id_personaje = ? AND nombre_per = ?";
            $check_stmt = $this->conexion->prepare($check_sql);
            $check_stmt->execute([$this->intID, $this->strNombre]);
            if ($check_stmt->rowCount() > 0) {
              // Si ya existe una fila con los mismos valores de id_personaje y nombre_per, devolver un mensaje
              echo "Error: Ya existe una fila con los mismos valores de id_personaje y nombre_per";
              return;
            }
          
            // Si no existe una fila con los mismos valores de id_personaje y nombre_per, continuar con la inserción
            try {
              $sql = "INSERT INTO personajes(id_personaje, nombre_per, status_per, direccion_per) VALUES(?,?,?,?)";
              $insert = $this->conexion->prepare($sql);
              $arrayName = array($this->intID, $this->strNombre, $this->strStatus, $this->strDireccion);
              $resinsert = $insert->execute($arrayName);
              
              
              if ($resinsert) {
                echo "ok";
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
            public function update(int $id, string $nombre, string $status, string $direccion) {
                $this->intID = $id;
                $this->strNombre = $nombre;
                $this->strStatus = $status;
                $this->strDireccion = $direccion;
            
                $sql = "UPDATE personajes SET nombre_per = ?, status_per = ?, direccion_per = ? WHERE id_personaje = ?";
                $stmt = $this->conexion->prepare($sql);
                $resupdate = $stmt->execute([$this->strNombre, $this->strStatus, $this->strDireccion, $this->intID]);
            
                if ($resupdate) {
                    echo "ok";
                } else {
                    // Si hubo un error al ejecutar la consulta de actualización, mostrar un mensaje de error
                    echo "Error al actualizar el Personaje en la base de datos";
                }
            }
            
            
            // Eliminar un Personaje
            public function delete(int $id) {
                $sql = "DELETE FROM personajes WHERE id_personaje = ?";
                $stmt = $this->conexion->prepare($sql);
                $resdelete = $stmt->execute([$id]);
            
                if ($resdelete) {
                  echo "ok";
                } else {
                // Si hubo un error al ejecutar la consulta de eliminación, mostrar un mensaje de error
                echo "Error al eliminar el Personaje en la base de datos";
                }
            }
  
          

    }


?>