<?php
class OrderController
{

  static function new()
  {
    $pago = Pay::get_all();  
    include "paypal/registroPedido.php";
  }

  static function create()
  {
    $date = time();
    $date = date ("Y-m-d", $date);

  
    if(isset($_SESSION['usuario']) ) {
      
      foreach ($_SESSION['shopping_car'] as $key => $product) {
         print_r($key);
         
      }
      if (isset($_POST)) {
        $datos = array(
          "id_usuario" => $_SESSION['usuario']['id_usuario'],
          "tipo_pago" => $_POST['tipo_pago'],
          "domicilio" => $_POST['domicilio'],
          "pais" => $_POST['pais'],
          "estado" => $_POST['estado'],
          "municipio" => $_POST['municipio'],
          "codigo_postal" => $_POST['codigo_postal'],
          "referencias" => $_POST['referencias'],
          "total_compra" => $_POST['total_compra'],
          "fecha_compra" => $date
        );
        $respuesta = Order::create($datos);
        if ($respuesta) {
          //$_SESSION['shopping_car'] = [];
          //echo '<script>alert("Compra realizada con éxito");</script> ';
          //echo '<script>window.location="index.php?action=index.php"</script>';
        }
        include "paypal/registroPedido.php";
      }
    }
  
  }

  static function get_all()
  {
    $results = Order::get_all();
    include "views/modules/mostrarPedidos.php";
  }

  static function get_order($id)
  {
    $results = Order::get_order($id);
    include "views/modules/detalle.php";
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