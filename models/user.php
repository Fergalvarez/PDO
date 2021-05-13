<?php

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
            echo ' <script>alert("Usuario registrado con éxito");</script> ';
            echo '<script>window.location="index.php?action=registro"</script>';

        } catch (PDOException $e) {
            return $e->getMessage();
        }
    
    }

    public static function get_all()
    {
        $smtp = Conexion::conectar()->prepare("SELECT * FROM usuario");
        $smtp->execute();
        return $smtp->fetchAll();
    }

    public static function edit()
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM usuario WHERE id_usuario='id_usuario'");
        $stmt->execute();
        return $smtp->fetchAll();
    }

    public static function update($datos)
    {
        try {
            $stmt = Conexion::conectar()->prepare("UPDATE usuario SET `id_rol_usuario` = :rol, `id_genero_usuario` = :genero, `nombre` = :nombre, `apellido_paterno` = :apellidop, `apellido_materno` = :apellidom, `fecha_nacimiento` = :nacimiento, `telefono` = :telefono, `email` = :email, `usuario_sesion` = :usuario, `contrasena` = :password, `confirmacion` = :confirmacion");
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
            echo ' <script>alert("Usuario actualizado con éxito");</script> ';
            echo '<script>window.location="index.php?action=actualizar_usuario"</script>';
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        return $stmt;
    }    
}