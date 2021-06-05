<?php
class UserController
{

  static function new()
  { $rol=Rol::get_all();
    $generos = Gender::get_all();
    include "views/modules/registroUsuario.php";
  }

  static function create()
  {
    /**$contrasena="";
    $error= "";

    if(strlen($contrasena) < 6){
      $error = "La clave debe tener al menos 6 caracteres";
      return false;
   }
   if(strlen($contrasena) > 16){
      $error = "La clave no puede tener más de 16 caracteres";
      return false;
   }
   if (!preg_match('`[a-z]`',$contrasena)){
      $error = "La clave debe tener al menos una letra minúscula";
      return false;
   }
   if (!preg_match('`[A-Z]`',$contrasena)){
      $error  = "La clave debe tener al menos una letra mayúscula";
      return false;
   }
   if (!preg_match('`[0-9]`',$contrasena)){
      $error = "La clave debe tener al menos un caracter numérico";
      return false;
   }
   $error_clave = "";
   return true;**/

    if (isset($_POST)) {
      $datos = array(
        "tipo_usuario" => 2,
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
      if ($respuesta) {
        echo '<script>alert("Usuario registrado con éxito");</script> ';
        echo '<script>window.location="index.php?action=registro"</script>';
      }
      include "views/modules/registroUsuario.php";
    }
  }

  static function get_all()
  {
    $results = User::get_all();
    include "views/modules/mostrarUsuarios.php";
  }

  static function edit($id)
  {
    $usuario = User::getById($id);
    $rol=Rol::get_all();
    $generos = Gender::get_all();
    $tipo_usuarios = [
      ['id' => 1, 'tipo_usuario' => 'Cliente'],
      ['id' => 2, 'tipo_usuario' => 'Administrador']
    ];
    include "views/modules/actualizarUsuario.php";
  }

  static function update($id)
  {
    $tipo_usuarios = [
      ['id' => 1, 'tipo_usuario' => 'Cliente'],
      ['id' => 2, 'tipo_usuario' => 'Administrador']
    ];
    $rol=Rol::get_all();
    $generos = Gender::get_all();
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
      if ($respuesta) {
        echo '<script>alert("Usuario actualizado con éxito");</script> ';
        echo '<script>window.location="index.php?action=mostrar_usuarios"</script>';
      }
      $usuario = $_POST;
      include "views/modules/actualizarUsuario.php";
    }
  }

  static function delete($id)
  {
    if (isset($id)) {
      $respuesta = User::delete($id);
      echo '<script>alert("Usuario eliminado con éxito");</script> ';
      echo '<script>window.location="index.php?action=mostrar_usuarios"</script>';
    } else {
      echo '<script>window.location="index.php?action=mostrar_usuarios"</script>';
    }
  }

  static function login()
  {
    include "views/modules/login.php";
  }

  static function sign_in()
  {
    $usuario = User::login($_POST['email'], $_POST['password']);

    if ($usuario != false) {
      $_SESSION['usuario'] = $usuario;
      echo '<script>window.location="index.php";</script>';
    }
    echo '<script>alert("SUS DATOS SON INCORRECTOS.");</script>';
    echo '<script>window.location="index.php?action=login_usuario";</script>';
  }

  static function log_out()
  {
    unset($_SESSION['usuario']);
    echo '<script>window.location="index.php";</script>';
  }

  static function cliente()
  {
    
    // include "views/modules/cliente.php";
  }
}
