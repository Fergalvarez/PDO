<?php
class UserController
{

  static function new()
  {
    include "views/modules/registroUsuario.php";
  }

  static function create()
  {
    if (isset($_POST)) {
      $datos = array(
        "tipo_usuario" => $_POST['tipo_usuario'],
        "genero" => $_POST['genero'],
        "nombre" => $_POST['nombre'],
        "apellido_paterno" => $_POST['apellido_paterno'],
        "apellido_materno" => $_POST['apellido_materno'],
        "fecha_nacimiento" => $_POST['fecha_nacimiento'],
        "telefono" => $_POST['telefono'],
        "email" => $_POST['email'],
        "usuario_sesion" => $_POST['usuario_sesion'],
        "contrasena" => $_POST['contrasena'],
        "confirmacion_contrasena" => $_POST['confirmacion_contrasena']
      );
      $respuesta = User::create($datos);
      echo $respuesta;
    }
  }

  static function get_all()
  {
    $results = User::get_all();
    include "views/modules/mostrarUsuario.php";
  }

  static function edit($id)
  {
    $usuario = User::getById($id);
    include "views/modules/actualizarUsuario.php";
  }

  static function update($id)
  {
    if (isset($id)) {
      $datos = array(
        "tipo_usuario" => $_POST['tipo_usuario'],
        "genero" => $_POST['genero'],
        "nombre" => $_POST['nombre'],
        "apellido_paterno" => $_POST['apellido_paterno'],
        "apellido_materno" => $_POST['apellido_materno'],
        "fecha_nacimiento" => $_POST['fecha_nacimiento'],
        "telefono" => $_POST['telefono'],
        "email" => $_POST['email'],
        "usuario_sesion" => $_POST['usuario_sesion'],
        "contrasena" => $_POST['contrasena'],
        "confirmacion_contrasena" => $_POST['confirmacion_contrasena']
      ); 

      $respuesta = User::update($id, $datos);
      if($respuesta == true){
        var_dump($respuesta);
        echo '<script>alert("Usuario actualizado con éxito");</script> ';
        echo '<script>window.location="index.php?action=mostrar_usuarios"</script>';  
      }else{
        $usuario = $_POST;
        include "views/modules/actualizarUsuario.php";
      }
    }

  }

  static function delete($id)
	{
		if (isset($id))
		{
			$respuesta=User::delete($id); 
      echo '<script>alert("Usuario eliminado con éxito");</script> ';
      echo '<script>window.location="index.php?action=mostrar_usuarios"</script>';
		}else{
      echo '<script>window.location="index.php?action=mostrar_usuarios"</script>';
    }

	}

}
