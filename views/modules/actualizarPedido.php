<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Pedido</title>
</head>

<body>
    <div class="container pb-5">
        <h1>PÁGINA DE COMPRA</h1>
        <div class="row">
            <div class="col pt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Direccion de envío</h5>
                        <form action="?action=actualizar_pedido&id=<?= $id ?>" method="post">
                            <div class="mb-3 row">
                                <label for="domicilio" class="col-sm-2 col-form-label">Domicilio</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="domicilio" value="<?= $pedido['domicilio']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="pais" class="col-sm-2 col-form-label">Pais</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pais" value="<?= $pedido['pais']; ?>" readonly>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="estado" value="<?= $pedido['estado']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="municipio" class="col-sm-2 col-form-label">Municipio</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="municipio" value="<?= $pedido['municipio']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="codigo_postal" class="col-sm-2 col-form-label">Código postal</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="codigo_postal" value="<?= $pedido['codigo_postal']; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="referencias" class="form-label">Referencias</label>
                                <textarea class="form-control" name="referencias" value="<?= $pedido['referencias']; ?>" rows="3"></textarea>
                            </div>
                            <div class="mb-3 row">
                                <label for="tipo_pago" class="col-sm-2 col-form-label">Tipo de pago</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="tipo_pago">
                                    <option>Selecciona</option>
                                        <?php foreach ($pago as $value) { ?>
                                            <option value="<?= $value['id_pago'] ?>" <?= $value['id_pago'] == $pedido['id_pago'] ? 'selected' : '' ?>>
                                                <?= $value['tipo_pago'] ?>
                                            </option>;
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="fecha_compra" class="col-sm-2 col-form-label">Fecha</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="fecha_compra" value="<?= $pedido['fecha_compra']; ?>" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-secondary me-md-2" type="reset">Limpiar</button>
                                <button class="btn btn-primary" type="submit" name="confirmar">Confirmar compra</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>