<?php

error_reporting(0);

require_once("conexion.php");

class User extends Conexion
{
    public static function create($datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("INSERT INTO usuario(id_rol_usuario, id_genero_usuario, nombre, apellido_paterno, apellido_materno, fecha_nacimiento, telefono, email, usuario_sesion, contrasena, confirmacion) VALUES(:rol, :genero, :nombre, :apellidop, :apellidom, :nacimiento, :telefono, :email, :usuario, :password, :confirmacion)");
            $stmt->bindParam(":rol", $datos["tipo_usuario"], PDO::PARAM_STR);
            $stmt->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":apellidop", $datos["apellido_paterno"], PDO::PARAM_STR);
            $stmt->bindParam(":apellidom", $datos["apellido_materno"], PDO::PARAM_STR);
            $stmt->bindParam(":nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindParam(":usuario", $datos["usuario_sesion"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["contrasena"], PDO::PARAM_STR);
            $stmt->bindParam(":confirmacion", $datos["confirmacion_contrasena"], PDO::PARAM_STR);
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
            $smtp = Conexion::conectar()->prepare("SELECT * FROM usuario");
            $smtp->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return $smtp->fetchAll();
    }

    public static function getById($id)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM usuario WHERE id_usuario='" . $id . "' limit 1");
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function update($id, $datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE usuario SET id_rol_usuario = :rol, id_genero_usuario = :genero, nombre = :nombre, apellido_paterno = :apellidop, apellido_materno = :apellidom, fecha_nacimiento = :nacimiento, telefono = :telefono, email = :email, usuario_sesion = :usuario, contrasena = :password, confirmacion = :confirmacion where id_usuario = :id ");
            $stmt->bindParam(":id", $id, PDO::PARAM_STR);
            $stmt->bindParam(":rol", $datos["tipo_usuario"], PDO::PARAM_STR);
            $stmt->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":apellidop", $datos["apellido_paterno"], PDO::PARAM_STR);
            $stmt->bindParam(":apellidom", $datos["apellido_materno"], PDO::PARAM_STR);
            $stmt->bindParam(":nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);
            $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindParam(":usuario", $datos["usuario_sesion"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["contrasena"], PDO::PARAM_STR);
            $stmt->bindParam(":confirmacion", $datos["confirmacion_contrasena"], PDO::PARAM_STR);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return $stmt;
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
            $stmt = Conexion::conectar()->prepare("DELETE FROM usuario WHERE id_usuario='" . $id . "'");
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        return $stmt;
    }
}
