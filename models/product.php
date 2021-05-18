<?php

error_reporting(0);

require_once("conexion.php");

class Product extends Conexion
{
    public static function create($datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO producto(id_categoria, id_genero_usuario, producto, color, talla, cantidad, precio_unitario, imagen) VALUES(:categoria, :genero, :producto, :color, :talla, :cantidad, :precio, :imagen)");
            $stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
            $stmt->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
            $stmt->bindParam(":producto", $datos["producto"], PDO::PARAM_STR);
            $stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
            $stmt->bindParam(":talla", $datos["talla"], PDO::PARAM_STR);
            $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
            $stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
            $stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
    }

    public static function get_all()
    {
        try {
            $smtp = Conexion::conectar()->prepare("SELECT * FROM producto");
            $smtp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return $smtp->fetchAll();
    }

    public static function getById($id)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM producto WHERE id_producto='" . $id . "' limit 1");
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function update($id, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE producto SET id_categoria = :categoria, id_genero_usuario = :genero, producto = :producto, color = :color, talla = :talla, cantidad = :cantidad, precio_unitario = :precio, imagen = :imagen where id_producto = :id");
            $stmt->bindParam(":id", $id, PDO::PARAM_STR);
            $stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
            $stmt->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
            $stmt->bindParam(":producto", $datos["producto"], PDO::PARAM_STR);
            $stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
            $stmt->bindParam(":talla", $datos["talla"], PDO::PARAM_STR);
            $stmt->bindParam(":cantidad", $datos["cantidad"], PDO::PARAM_STR);
            $stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
            $stmt->bindParam(":imagen", $datos["imagen"], PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
    }

    public static function product_category($id_categoria)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM categoria_producto WHERE id_categoria=" . $id_categoria . " limit 1");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return $stmt->fetch();
    }
    
    public static function user_gender($id_genero_usuario)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM genero_usuario WHERE id_genero_usuario=" . $id_genero_usuario . " limit 1");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return $stmt->fetch();
    }

    public static function delete($id)
    {
        try {
            $stmt = Conexion::conectar()->prepare("DELETE FROM producto WHERE id_producto='" . $id . "'");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return $stmt;
    }

    public static function imagen($id)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT imagen FROM producto WHERE id_producto=" . $id . " limit 1");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return $stmt->fetch();
    }
    
}

?> 
