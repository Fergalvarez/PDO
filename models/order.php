<?php

error_reporting(0);

require_once("conexion.php");

class Order extends Conexion
{
    public static function create($datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO compra(id_usuario, id_carrito_compra, id_direccion, id_pago, domicilio, pais, estado, municipio, codigo_postal, referencias, fecha_compra) VALUES(:usuario, :carrito, :direccion, :tpago, :domicilio, :pais, :estado, :municipio, :cpostal, :referencias, :fcompra)");
            $stmt->bindParam(":usuario", $datos["id_usuario"], PDO::PARAM_STR);
            $stmt->bindParam(":carrito", $datos["id_carrito_compra"], PDO::PARAM_STR);
            $stmt->bindParam(":tpago", $datos["tipo_pago"], PDO::PARAM_STR);
            $stmt->bindParam(":domicilio", $datos["domicilio"], PDO::PARAM_STR);
            $stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
            $stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
            $stmt->bindParam(":municipio", $datos["municipio"], PDO::PARAM_STR);
            $stmt->bindParam(":cpostal", $datos["codigo_postal"], PDO::PARAM_STR);
            $stmt->bindParam(":referencias", $datos["referencias"], PDO::PARAM_STR);
            $stmt->bindParam(":fcompra", $datos["fecha_compra"], PDO::PARAM_STR);
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return true;
    }

    public static function get_all()
    {
        try {
            $smtp = Conexion::conectar()->prepare("SELECT * FROM compra");
            $smtp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return $smtp->fetchAll();
    }

    public static function getById($id)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM compra WHERE id_compra='" . $id . "' limit 1");
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function update($id, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE compra SET id_usuario = :usuario, id_carrito_compra = :carrito, domicilio = :domicilio, pais = :pais, estado = :estado, municipio = :municipio, codigo_postal = :cpostal, referencias = :referencias, id_pago = :tpago, fecha_compra = :fcompra where id_compra = :id ");
            $stmt->bindParam(":id", $id, PDO::PARAM_STR);
            $stmt->bindParam(":usuario", $datos["domicilio"], PDO::PARAM_STR);
            $stmt->bindParam(":carrito", $datos["pais"], PDO::PARAM_STR);
            $stmt->bindParam(":tpago", $datos["municipio"], PDO::PARAM_STR);
            $stmt->bindParam(":domicilio", $datos["domicilio"], PDO::PARAM_STR);
            $stmt->bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
            $stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
            $stmt->bindParam(":municipio", $datos["municipio"], PDO::PARAM_STR);
            $stmt->bindParam(":cpostal", $datos["codigo_postal"], PDO::PARAM_STR);
            $stmt->bindParam(":referencias", $datos["referencias"], PDO::PARAM_STR);
            $stmt->bindParam(":fcompra", $datos["codigo_postal"], PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return $stmt;
    }

    public static function payment_type($id_pago)
    {
        try {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM pago WHERE id_pago=" . $id_pago . " limit 1");
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
            $stmt = Conexion::conectar()->prepare("DELETE FROM compra WHERE id_compra='" . $id . "'");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return $stmt;
    }
}