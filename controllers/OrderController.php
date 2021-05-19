<?php
class OrderController
{

  static function new()
  {
    $pago = Pay::get_all();
    include "views/modules/registroPedido.php";
  }

  static function create()
  {
    if (isset($_POST)) {
      $datos = array(
        "usuario" => $_POST['id_usuario'],
        "carrito" => $_POST['id_carrito'],
        "pago" => $_POST['tipo_pago'],
        "domicilio" => $_POST['domicilio'],
        "pais" => $_POST['pais'],
        "estado" => $_POST['estado'],
        "municipio" => $_POST['municipio'],
        "cpostal" => $_POST['codigo_postal'],
        "referencias" => $_POST['referencias'],
        "fcompra" => $_POST['fecha_compra']
      );
      $respuesta = Order::create($datos);
      if ($respuesta) {
        echo '<script>alert("Compra realizada con éxito");</script> ';
        echo '<script>window.location="index.php?action=registro_pedido"</script>';
      }
      include "views/modules/registroPedido.php";
    }
  }

  static function get_all()
  {
    $results = Order::get_all();
    include "views/modules/mostrarPedidos.php";
  }

  static function edit($id)
  {
    $pedido = Order::getById($id);
    $pago = Pay::get_all();
    include "views/modules/actualizarPedido.php";
  }

  static function update($id)
  {
    $pago = Pay::get_all();
    if (isset($id)) {
      $datos = array(
        "usuario" => $_POST['id_usuario'],
        "carrito" => $_POST['id_carrito'],
        "pago" => $_POST['tipo_pago'],
        "domicilio" => $_POST['domicilio'],
        "pais" => $_POST['pais'],
        "estado" => $_POST['estado'],
        "municipio" => $_POST['municipio'],
        "cpostal" => $_POST['codigo_postal'],
        "referencias" => $_POST['referencias'],
        "fcompra" => $_POST['fecha_compra']
      );

      $respuesta = Order::update($id, $datos);
      if ($respuesta) {
        echo '<script>alert("Pedido actualizado con éxito");</script> ';
        echo '<script>window.location="index.php?action=mostrar_pedidos"</script>';
      }
      $usuario = $_POST;
      include "views/modules/actualizarPedido.php";
    }
  }

  static function delete($id)
  {
    if (isset($id)) {
      $respuesta = Order::delete($id);
      echo '<script>alert("Pedido eliminado con éxito");</script> ';
      echo '<script>window.location="index.php?action=mostrar_pedidos"</script>';
    } else {
      echo '<script>window.location="index.php?action=mostrar_pedidos"</script>';
    }
  }
}