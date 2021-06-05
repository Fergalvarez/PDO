<div class="container">
    <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-pills card-header-pills">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Producto</a>
                </li>
            </ul>
        </div>
        <div class="card justify-content-center align-items-center">
        <div class="card-body">
        <div class="card mb-3" style="max-width: 700px;">
            <div class="row g-0">
            
                <div class="col-md-4">
                    <img src="<?= $result['imagen'] ?>" style=" width: 300px; heihgt: 300px; padding-right: 100px; margin-left: 20px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $result['producto'] ?></h5>
                        <h5 class="card-text">Talla: <?= $result['talla'] ?></h5>
                        <h5 class="card-text"><small class="text-muted"><?= $result['precio_unitario'] ?></small></h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">¡Estas a un solo clic de que sea tuya!</h5>
            <a href="index.php?action=agregar_carrito&id=<?= $product['id_producto'] ?>" class="btn btn-primary">Agregar carrito </a>
        </div>
    </div>
</div>