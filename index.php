<?php
session_start();
require_once("controllers/UserController.php");
require_once("controllers/ProductController.php");
require_once("controllers/OrderController.php");
require_once("controllers/rutasController.php");
require_once("controllers/ShoppingCarController.php");
require_once("controllers/GraphicController.php");
require_once("controllers/SearchController.php");
require_once("models/user.php");
require_once("models/gender.php");
require_once("models/category.php");
require_once("models/product.php");
require_once("models/order.php");
require_once("models/pay.php");
require_once("models/rol.php");
require_once("models/graphic.php");
require_once("models/search.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="views/css/estilos.css">
  <script src="views/js/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="views/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>

<body>
  <?php
  if ($_SESSION['usuario']['id_rol_usuario'] == 1) {
    include("views/modules/navegacion_admin.php");
  } else if ($_SESSION['usuario']['id_rol_usuario'] == 2) {
    include("views/modules/navegacion_cliente.php");
  } else {
    include("views/modules/navegacion.php");
  }
  ?>

  <div container>
    <?php
    $action = isset($_GET["action"]) ? $_GET["action"] : '/';
    switch ($action) {
      case 'registrar_usuario':
        UserController::new();
        break;
      case 'crear_usuario':
        UserController::create();
        break;
      case 'mostrar_usuarios':
        UserController::get_all();
        break;
      case 'editar_usuario':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        UserController::edit($id);
        break;
      case 'actualizar_usuario':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        echo $id;
        UserController::update($id);
        break;
      case 'eliminar_usuario':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        UserController::delete($id);
        break;
      case 'login_usuario':
        UserController::login();
        break;
      case 'iniciar_sesion':
        UserController::sign_in();
        break;
      case 'log_out':
        UserController::log_out();
        break;
      case 'registrar_producto':
        ProductController::new();
        break;
      case 'crear_producto':
        ProductController::create();
        break;
      case 'mostrar_productos':
        ProductController::get_all();
        break;
      case 'editar_producto':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        ProductController::edit($id);
        break;
      case 'actualizar_producto':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        echo $id;
        ProductController::update($id);
        break;
      case 'eliminar_producto':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        ProductController::delete($id);
        break;
      case 'catalogo_articulos':
        ProductController::categoria();
        break;
      case 'mostrar_articulo1':
        ProductController::articulo1();
        break;
      case 'mostrar_articulo2':
        ProductController::articulo2();
        break;
      case 'mostrar_articulo3':
        ProductController::articulo3();
        break;
      case 'ver_producto':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        ProductController::detalle($id);
        break;
      case 'registrar_pedido':
        OrderController::new();
        break;
      case 'crear_pedido':
        OrderController::create();
        break;
      case 'mostrar_pedidos':
        OrderController::get_all();
        break;
      case 'editar_pedido':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        OrderController::edit($id);
        break;
      case 'actualizar_pedido':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        echo $id;
        OrderController::update($id);
        break;
      case 'eliminar_pedido':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        OrderController::delete($id);
        break;
      case 'detalle_pedido':
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        OrderController::get_order($id);
        break;
      case 'mostrar_contacto':
        rutasController::contacto();
        break;
      case 'mostrar_carrito':
        ShoppingCarController::show_shopping_car();
        break;
      case 'agregar_carrito':
        ShoppingCarController::add_shopping_car();
        break;
      case 'eliminar_carrito':
        ShoppingCarController::delete_shopping_car();
        break;
      case 'mostrar_grafica':
        GraphicController::new();
        break;
      case 'buscar_usuarios':
        SearchController::new();
        break;
      default:
        ProductController::get_all_Cliente();
        $show = new UserController();
        $show->cliente();
        break;
    }
    ?>
  </div>
</body>

</html>