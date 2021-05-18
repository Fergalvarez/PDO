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
    include('navegacion.php');
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">DoricaEliza</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <img src="imagenes/iconos/house-door.svg" alt="Bootstrap" width="32" height="32">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/blusas.php">Blusas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/vestidos.php">Vestidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/accesorios.php">Accesorios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="views/contacto.php">Contacto</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a class="nav-link" href="views/carrito_compra.php"><span>Carrito</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="views/autenticacion.php"><span> Iniciar sesión</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="views/registro.php"><span>Registrarse</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div id="carousel">
            <div class="row">
                <div class="col">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="imagenes\imagen.png" class="d-block w-100" style="height:500px; min-width:100px" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes\imagen.png" class="d-block w-100" alt="..." style="height:500px; min-width:100px">
                            </div>
                            <div class="carousel-item">
                                <img src="imagenes\imagen.png" class="d-block w-100" alt="..." style="height:500px; min-width:100px">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="catalogo" class="container pb-5">
        <div id="imagenes">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes\imagen.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Producto</p>
                            <a href="#" class="card-link">Precio</a>
                            <a href="#" class="card-link">Ver aquí</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes\imagen.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Producto</p>
                            <a href="#" class="card-link">Precio</a>
                            <a href="#" class="card-link">Ver aquí</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes\imagen.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Producto</p>
                            <a href="#" class="card-link">Precio</a>
                            <a href="#" class="card-link">Ver aquí</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes\imagen.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Producto</p>
                            <a href="#" class="card-link">Precio</a>
                            <a href="#" class="card-link">Ver aquí</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes\imagen.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Producto</p>
                            <a href="#" class="card-link">Precio</a>
                            <a href="#" class="card-link">Ver aquí</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes\imagen.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Producto</p>
                            <a href="#" class="card-link">Precio</a>
                            <a href="#" class="card-link">Ver aquí</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes\imagen.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Producto</p>
                            <a href="#" class="card-link">Precio</a>
                            <a href="#" class="card-link">Ver aquí</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes\imagen.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Producto</p>
                            <a href="#" class="card-link">Precio</a>
                            <a href="#" class="card-link">Ver aquí</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="imagenes\imagen.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Producto</p>
                            <pclass="card-link">Precio</p>
                            <p href="#" class="card-link">Ver aquí</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="views/js/jquery-3.6.0.min.js"></script>
    <script src="views/js/bootstrap.min.js"></script>
</body>

</html>