<?php

require_once("conexion.php");

  $enero = Conexion::conectar()->prepare("SELECT SUM(total_compra) AS total FROM compra WHERE MONTH(fecha_compra)= 1 AND YEAR(fecha_compra)= 2021");
  $enero -> execute();
  $enero = $enero->fetch(PDO::FETCH_ASSOC);

  $febrero = Conexion::conectar()->prepare("SELECT SUM(total_compra) AS total FROM compra WHERE MONTH(fecha_compra)= 2 AND YEAR(fecha_compra)= 2021");
  $febrero -> execute();
  $febrero = $febrero->fetch(PDO::FETCH_ASSOC);

  $marzo = Conexion::conectar()->prepare("SELECT SUM(total_compra) AS total FROM compra WHERE MONTH(fecha_compra)= 3 AND YEAR(fecha_compra)= 2021");
  $marzo -> execute();
  $marzo = $marzo->fetch(PDO::FETCH_ASSOC);
  
  $abril = Conexion::conectar()->prepare("SELECT SUM(total_compra) AS total FROM compra WHERE MONTH(fecha_compra)= 4 AND YEAR(fecha_compra)= 2021");
  $abril -> execute();
  $abril = $abril->fetch(PDO::FETCH_ASSOC);

  $mayo = Conexion::conectar()->prepare("SELECT SUM(total_compra) AS total FROM compra WHERE MONTH(fecha_compra)= 5 AND YEAR(fecha_compra)= 2021");
  $mayo -> execute();
  $mayo = $mayo->fetch(PDO::FETCH_ASSOC);

  $junio = Conexion::conectar()->prepare("SELECT SUM(total_compra) AS total FROM compra WHERE MONTH(fecha_compra)= 6 AND YEAR(fecha_compra)= 2021");
  $junio -> execute();
  $junio = $junio->fetch(PDO::FETCH_ASSOC);

  $julio = Conexion::conectar()->prepare("SELECT SUM(total_compra) AS total FROM compra WHERE MONTH(fecha_compra)= 7 AND YEAR(fecha_compra)= 2021");
  $julio -> execute();
  $julio = $julio->fetch(PDO::FETCH_ASSOC);

  $agosto = Conexion::conectar()->prepare("SELECT SUM(total_compra) AS total FROM compra WHERE MONTH(fecha_compra)= 8 AND YEAR(fecha_compra)= 2021");
  $agosto -> execute();
  $agosto = $agosto->fetch(PDO::FETCH_ASSOC);

  $septiembre = Conexion::conectar()->prepare("SELECT SUM(total_compra) AS total FROM compra WHERE MONTH(fecha_compra)= 9 AND YEAR(fecha_compra)= 2021");
  $septiembre -> execute();
  $septiembre =  $septiembre->fetch(PDO::FETCH_ASSOC);

  $octubre = Conexion::conectar()->prepare("SELECT SUM(total_compra) AS total FROM compra WHERE MONTH(fecha_compra)= 8 AND YEAR(fecha_compra)= 2021");
  $octubre -> execute();
  $octubre = $octubre->fetch(PDO::FETCH_ASSOC);

  $noviembre = Conexion::conectar()->prepare("SELECT SUM(total_compra) AS total FROM compra WHERE MONTH(fecha_compra)= 9 AND YEAR(fecha_compra)= 2021");
  $noviembre -> execute();
  $noviembre = $noviembre->fetch(PDO::FETCH_ASSOC);

  $diciembre = Conexion::conectar()->prepare("SELECT SUM(total_compra) AS total FROM compra WHERE MONTH(fecha_compra)= 10 AND YEAR(fecha_compra)= 2021");
  $diciembre -> execute();
  $diciembre = $diciembre->fetch(PDO::FETCH_ASSOC);
 
    $data = [];
    $data = [
        0 => round($enero['total'],1),
        1 => round($febrero['total'],1),
        2 => round($marzo['total'],1),
        3 => round($abril['total'],1),
        4 => round($mayo['total'],1),
        5 => round($junio['total'],1),
        6 => round($julio['total'],1),
        7 => round($agosto['total'],1),
        8 => round($septiembre['total'],1),
        9 => round($octubre['total'],1),
        10 => round($noviembre['total'],1),
        11 => round($diciembre['total'],1)
    ];

    echo json_encode($data);

?>