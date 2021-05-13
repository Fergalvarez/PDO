<?php
require_once("controllers/UserController.php");
require_once("models/user.php");
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
  include("views/modules/navegacion.php")
  ?>

  <div container>
    <?php
    $action = isset($_GET["action"]) ? $_GET["action"] : '/';
    switch ($action) {
      case 'registro':
        UserController::new();
        break;
      case 'registrar_usuario':
        UserController::create();
        break;
      case 'mostrar_usuarios':
        UserController::get_all();
        break;
      case 'actualizar_usuario':
        UserController::edit();
        UserController::update();
        break;
      default:
        $show = new userController();
        $show -> get_all();
        break;
    }
    ?>
  </div>

<script src="views/js/jquery-3.6.0.min.js"></script>
<script src="views/js/bootstrap.min.js"></script>
</body>
</html>