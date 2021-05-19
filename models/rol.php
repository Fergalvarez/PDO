<?php

error_reporting(0);

require_once("conexion.php");

class Rol extends Conexion
{
  public static function get_all()
  {
    try {
      $smtp = Conexion::conectar()->prepare("SELECT * FROM rol_usuario");
      $smtp->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
    return $smtp->fetchAll();
  }
}
