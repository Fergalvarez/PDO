<?php

require_once("conexion.php");

class Crud extends Conexion
{
    public static function altaUsuarioModel($datos, $tabla)
    {
        $stmt=Conexion::conectar()->prepare("INSERT INTO $tabla ('id_rol_usuario', 'id_genero_usuario', 'nombre', 'apellido_paterno', 'apellido_materno', 'fecha_nacimiento', 'telefono', 'email', 'usuario_sesion', 'contraseña','confirmacion')VALUES(:rol, :genero, :nombre, :apellidop, :apellidom, :nacimiento, :telefono, :email, :usuario, :contraseña, :confirmacion)");
        $stmt->bindParam(":rol", $datos["tipo_usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":apellidop", $datos["apellido_paterno"], PDO::PARAM_STR);
        $stmt->bindParam(":apellidom", $datos["apellido_materno"], PDO::PARAM_STR);
        $stmt->bindParam(":nacimiento", $datos["fecha_nacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datos["telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":usuario", $datos["usuario_sesion"], PDO::PARAM_STR);
        $stmt->bindParam(":contraseña", $datos["contraseña"], PDO::PARAM_STR);
        $stmt->bindParam(":contraseña", $datos["confirmacion_contraseña"], PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "success";
        } else {
            return "error";
        }
    }
}

    
?>