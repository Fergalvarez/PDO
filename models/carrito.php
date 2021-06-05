<?php

error_reporting(0);

require_once("conexion.php");

class Carrito extends Conexion
{
    public static function create($datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO carrito_compra(id_carrito_compra, id_producto_carrito) VALUES(:carrito, :producto)");
            $stmt->bindParam(":carrito", $datos["id_carrito"], PDO::PARAM_STR);
            $stmt->bindParam(":producto", $datos["id_producto"], PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            echo 0;
            exit;
            return false;
        }
        return true;
    }
}