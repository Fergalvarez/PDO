<?php
session_start();
require_once("controllers/UserController.php");
require_once("controllers/ProductController.php");
require_once("controllers/OrderController.php");
require_once("controllers/rutasController.php");
require_once("models/user.php");
require_once("models/gender.php");
require_once("models/category.php");
require_once("models/product.php");
require_once("models/order.php");
require_once("models/pay.php");
require_once("models/rol.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <?php
  if ($_SESSION['usuario']['id_rol_usuario'] == 1) {
    include("views/modules/navegacion_admin.php");
  } else if ($_SESSION['usuario']['id_rol_usuario'] == 2) {
    include("views/modules/navegacion_cliente.php");
  } else{
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
      case 'catalogo_productos':
        $id = isset($_GET['categoria']) ? $_GET['categoria'] : '';
        ProductController::getByIdCategoria($id);
        break;
      case 'mostrar_articulo1':
        ProductController::get_all_Cliente();
        rutasController::articulo1();
        break;
      case 'mostrar_articulo2':
        rutasController::articulo2();
        break;
      case 'mostrar_articulo3':
        rutasController::articulo3();
        break;
      case 'mostrar_contacto':
        rutasController::contacto();
        break;
      case 'mostrar_carrito':
        rutasController::carrito();
        break;
      default:
        ProductController::get_all_Cliente();
        $show = new UserController();
        $show->cliente();
        break;
    }
    ?>
  </div>

  <script src="views/js/jquery-3.6.0.min.js"></script>
  <script src="views/js/bootstrap.min.js"></script>
</body>

</html>