<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>

<body>
    <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($results as $key => $product) { ?>
                    <div class="carousel-item <?= $key + 1 == 1 ? "active" : "" ?>">
                        <img class="rounded mx-auto d-block" src="<?= $product['imagen'] ?>" height="400">
                        <div class="carousel-caption d-none d-md-block">
                            <h5><?= $product['producto'] ?></h5>
                            <p>
                                <?= $product['precio_unitario'] ?>
                                <br>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="index.php?action=ver_producto&id=<?= $product['id_producto'] ?>" class="card-link text-decoration-none btn btn-danger">Ver aquí</a>
                                <a href="index.php?action=agregar_carrito&id=<?= $product['id_producto'] ?>" class="card-link text-decoration-none btn btn-success">Agregar carrito</a>
                            </div>
                            </p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div id="catalogo" class="container pb-5">
        <div id="imagenes">
            <div class="row">
                <?php foreach ($results as $product) { 
                    ?>
                    <div class="col-lg-4">
                        <div class="card border border-secondary" style="width: 18rem;">
                            <img class="card-img-top" src="<?= $product['imagen'] ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?= $product['producto'] ?></h5>
                                <p class="card-text"><?= $product['precio_unitario'] ?></p>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="index.php?action=ver_producto&id=<?= $product['id_producto'] ?>" class="card-link text-decoration-none btn btn-danger">Ver aquí</a>
                                    <a href="index.php?action=agregar_carrito&id=<?= $product['id_producto'] ?>" class="card-link text-decoration-none btn btn-success">Agregar carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 2000
            })
        });
    </script>
</body>

</html>