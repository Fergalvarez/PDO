<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Productos</title>
</head>

<body>
    <div class="container pb-5">
        <div class="row">
            <div class="col pt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Actualizar producto</h5>
                        <form action="?action=actualizar_producto&id=<?= $id ?>" method="post">
                            <div class="mb-3 row">
                                <label for="categoria" class="col-sm-2 col-form-label">Categoria</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="categoria">
                                    <option>Selecciona</option>
                                        <?php foreach ($categorias as $value) { ?>
                                            <option value="<?= $value['id_categoria'] ?>" <?= $value['id_categoria'] == $producto['id_categoria'] ? 'selected' : '' ?>>
                                                <?= $value['categoria'] ?>
                                            </option>;
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="genero" class="col-sm-2 col-form-label">Género</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="genero">
                                    <option>Selecciona</option>
                                        <?php foreach ($generos as $value) { ?>
                                            <option value="<?= $value['id_genero_usuario'] ?>" <?= $value['id_genero_usuario'] == $producto['id_genero_usuario'] ? 'selected' : '' ?>>
                                                <?= $value['genero'] ?>
                                            </option>;
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="producto" class="col-sm-2 col-form-label">Producto</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="producto" value="<?= $producto['producto']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="color" class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="color" value="<?= $producto['color']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="talla" class="col-sm-2 col-form-label">Talla</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="talla" value="<?= $producto['talla']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="cantidad" class="col-sm-2 col-form-label">Cantidad</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" name="cantidad" value="<?= $producto['cantidad']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="precio" class="col-sm-2 col-form-label">Precio unitario</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="precio" value="<?= $producto['precio_unitario']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="imagen" class="form-label">IMAGEN</label>
                                <input class="form-control" type="file" name="imagen" value="<?= $producto['imagen']; ?>" id="imagen" required>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-secondary me-md-2" type="reset">Limpiar</button>
                                <button class="btn btn-primary" type="submit" name="actualizar">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
    
