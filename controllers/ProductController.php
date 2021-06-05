<?php
class ProductController
{
  static function new()
  {
    $categorias = Category::get_all();
    $generos = Gender::get_all();
    include "views/modules/registroProducto.php";
  }

  static function create()
  {
    $target_file = self::uploadImage($_FILES['imagen']);
    if (isset($_POST)) {
      $datos = array(
        "categoria" => $_POST['categoria'],
        "genero" => $_POST['genero'],
        "producto" => $_POST['producto'],
        "color" => $_POST['color'],
        "talla" => $_POST['talla'],
        "cantidad" => $_POST['cantidad'],
        "precio" => $_POST['precio'],
        "imagen" => $target_file
      );

      $respuesta = Product::create($datos);
      if ($respuesta) {
        echo '<script>alert("Producto registrado con éxito");</script> ';
      }
      include "views/modules/registroProducto.php";
    }
  }

  static function get_all()
  {
    $results = Product::get_all();
    include "views/modules/mostrarProductos.php";
  }

  static function get_all_Cliente()
  {
    $results = Product::get_all();
    include "views/modules/cliente.php";
  }

  static function categoria()
  {
    $results = Product::get_all();
    include "views/modules/catalogo_articulos.php";
  }

  static function articulo1()
  {
    $results = Product::get_all();
    include "views/modules/articulos.php";
  }

  static function articulo2()
  {
    $results = Product::get_all();
    include "views/modules/articulos2.php";
  }

  static function articulo3()
  {
    $results = Product::get_all();
    include "views/modules/articulos3.php";
  }

  static function detalle($id)
  {
    $result = Product::getById($id);
    include "views/modules/detalle_producto.php";
  }

  static function edit($id)
  {
    $producto = Product::getById($id);
    $categorias = Category::get_all();
    $generos = Gender::get_all();
    include "views/modules/actualizarProducto.php";
  }

  static function update($id)
  {
    $categorias = Category::get_all();
    $generos = Gender::get_all();
    if (isset($_POST)) {
      $datos = array(
        "categoria" => $_POST['categoria'],
        "genero" => $_POST['genero'],
        "producto" => $_POST['producto'],
        "color" => $_POST['color'],
        "talla" => $_POST['talla'],
        "cantidad" => $_POST['cantidad'],
        "precio" => $_POST['precio'],
        "imagen" => $_POST['imagen'],
      );
      $respuesta = Product::update($id, $datos);
      if ($respuesta) {
        echo '<script>alert("Producto actualizado con éxito");</script> ';
        echo '<script>window.location="index.php?action=mostrar_productos"</script>';
      }
      $producto = $_POST;
      include "views/modules/actualizarProducto.php";
    }
  }

  static function delete($id)
  {
    if (isset($id)) {
      $respuesta = Product::delete($id);
      echo '<script>alert("Producto eliminado con éxito");</script> ';
      echo '<script>window.location="index.php?action=mostrar_productos"</script>';
    } else {
      echo '<script>window.location="index.php?action=mostrar_productos"</script>';
    }
  }

  static function uploadImage($imagen)
  {
    $target_dir = "public/products/";
    $target_file = $target_dir . basename($imagen["name"]);
    try {
      if (!move_uploaded_file($imagen["tmp_name"], $target_file)) {
        throw new Exception('Could not move file');
      }
      return $target_file;
    } catch (Exception $e) {
      die('File did not upload: ' . $e->getMessage());
    }
  }
}
