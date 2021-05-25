<?php
class ShoppingCarController
{
  static function add_shopping_car()
  {
    if (isset($_GET['id'])) {
      if (!isset($_SESSION['shopping_car'])) {
        $_SESSION['shopping_car'] = [];
      }

      if (!array_key_exists($_GET['id'], $_SESSION['shopping_car'])) {
        $_SESSION['shopping_car'][$_GET['id']] = 1;
      }

      header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
  }

  static function show_shopping_car()
  {
    $shopping_car = [];
    $total = 0;
    if (isset($_SESSION['shopping_car'])) {
      foreach ($_SESSION['shopping_car'] as $key => $product) {
        $result = Product::getById($key);
        $total += $result['precio_unitario'];
        array_push($shopping_car, $result);
      }
    }
    include "views/modules/mostrar_carrito.php";
  }

  static function delete_shopping_car()
  {
    if (isset($_SESSION['shopping_car'])) {
      if (array_key_exists($_GET['id'], $_SESSION['shopping_car'])) {
        unset($_SESSION['shopping_car'][$_GET['id']]);
      }
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
}
