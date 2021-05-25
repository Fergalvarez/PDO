<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Vestidos</title>
</head>

<body>
    
    <div class="container pb-5">

        <h1>BLUSAS</h1>
        <div id="catalogo" class="container pb-5">
        <div id="imagenes">
            <div class="row">
                <?php
                foreach($results as $product){
                ?>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $product['imagen'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                                    <p class="card-text"><?php echo $product['producto'] ?></p>
                            <div class="row justify-content-between">
                                <div class="col-4">
                                    <p class=""><?php echo $product['precio_unitario'] ?></p>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="card-link text-decoration-none">Ver aquí</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
        

    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

<footer class="fixed-bottom pt-1">
    <?php
    include('footer.php');
    ?>
</footer>

</html>