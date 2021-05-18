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

      include "files/upload.php";
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

        echo ('<pre>');
        print_r($target_file);
        echo ('</pre>');
        
        var_dump($_POST);
        var_dump($_FILES);
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
}
?>
