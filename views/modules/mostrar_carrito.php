<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compra</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($shopping_car as $product) { ?>
                    <tr>
                        <td><?= $product['producto'] ?></td>
                        <td><?= $product['precio_unitario'] ?></td>
                        <td>
                            <a class="nav-link btn btn-danger text-white" href="index.php?action=eliminar_carrito&id=<?= $product['id_producto'] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td>Total</td>
                    <td><?= $total ?></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="text-right">
            <td>
                <a class="nav-link btn btn-danger text-white" href="index.php?action=comprar_carrito">Comprar</a>
            </td>
        </div>
    </div>
</body>

</html>