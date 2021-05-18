<?php

error_reporting(0);

require_once("conexion.php");

class Pay extends Conexion
{
  public static function get_all()
  {
    try {
      $smtp = Conexion::conectar()->prepare("SELECT * FROM pago");
      $smtp->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
    return $smtp->fetchAll();
  }
}
