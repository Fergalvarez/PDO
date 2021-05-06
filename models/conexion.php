<?php

class Conexion
{
    public function conectar()
    {
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=doricaeliza", "root", "31141907");
            echo "Conexión realizada";
        } catch (PDOException $e) {
            echo "Error de conexión:". $e->getMessage();
        }
        return $conexion;
    }
}

?>