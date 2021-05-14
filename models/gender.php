<?php

error_reporting(0);

require_once("conexion.php");

class Gender extends Conexion
{
  public static function get_all()
  {
    try {
      $smtp = Conexion::conectar()->prepare("SELECT * FROM genero");
      $smtp->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
    return $smtp->fetchAll();
  }
}
