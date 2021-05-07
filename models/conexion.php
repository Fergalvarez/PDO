<?php

class Conexion
{
    public function conectar()
    {
        $host = 'localhost';
        $dbname = 'test_pdo';
        $username = 'root';
        $password = '1234';

        try {
            $conexion = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $username, $password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Conexión realizada";
        } catch (PDOException $e) {
            echo "Error de conexión:" . $e->getMessage();
        }
        return $conexion;
    }
}
