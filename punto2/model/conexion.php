<?php

class Conexion
{
    private $host = "localhost\\SQLEXPRESS";
    private $password = "";
    private $db = "PRUEBA_SOFTRON";
    private $conect;

    public function __construct()
    {
        try {
            //$this->conect = new PDO("sqlsrv:server=" . $this->host . ";database=" . $this->db, $this->user, $this->password); //. ";Trusted_Connection=True;" ."TrustServerCertificate=True");
            $this->conect = new PDO("sqlsrv:server=" . $this->host . ";database=" . $this->db, $this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexión a BD";
        } catch (Exception $e) {
            $this->conect = 'Error de conexión';
            echo "ERROR: " . $e->getMessage();
        }
    }

    public function connect()
    {
        return $this->conect;
    }
}

?>