<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Accesorios</title>
</head>

<body>
    <?php
    include('menu_cliente.php');
    ?>
    <div class="container pb-5">

        <h1>ACCESORIOS</h1>

        <?php
        include('catalogo_productos.php');
        ?>

    </div>
</body>

<footer class="fixed-bottom pt-1">
    <?php
    include('footer.php');
    ?>
</footer>

</html>