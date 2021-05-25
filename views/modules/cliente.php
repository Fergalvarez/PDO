<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="views/css/estilos.css">
    <title>Inicio</title>
</head>

<body>
    <?php
    echo "<pre>";
    // print_r($results);
    echo "</pre>";
    ?>
    <div class="container">
        <div id="carousel">
            <div class="row">
                <div class="col">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <?php
                            foreach ($results as $product) {
                            ?>
                                <img src="<?php echo $product['imagen'] ?>" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>



                    <!--<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        <?php
                        foreach ($results as $product) {
                        ?>
                            <div class="carousel-item active">
                                <img src="<?php echo $product['imagen'] ?>" class="d-block w-100" style="height:500px; min-width:100px" alt="...">
                            </div>
                        <?php
                        }
                        ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>-->
                </div>
            </div>
        </div>
    </div>

    <div id="catalogo" class="container pb-5">
        <div id="imagenes">
            <div class="row">
                <?php
                foreach ($results as $product) {
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


            <script src="views/js/jquery-3.6.0.min.js"></script>
            <script src="views/js/bootstrap.min.js"></script>
</body>

</html>