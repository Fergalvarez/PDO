<?php

error_reporting(0);

require_once("conexion.php");

class Category extends Conexion
{
  public static function get_all()
  {
    try {
      $smtp = Conexion::conectar()->prepare("SELECT * FROM categoria_producto");
      $smtp->execute();
    } catch (PDOException $e) {
      echo $e->getMessage();
      return false;
    }
    return $smtp->fetchAll();
  }
}