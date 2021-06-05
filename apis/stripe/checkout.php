<!DOCTYPE html>
<html>
  <head>
    <title>Confirmar compra</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <title>Compra</title>
</head>

<body>
        <div class="container pb-5">
            <div class="row">
                <div class="col pt-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">Direccion de envío</h5>
                            <form action="?action=crear_pedido" method="post">

                                <div class="mb-3 row">
                                    <label for="domicilio" class="col-sm-2 col-form-label">Domicilio</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="domicilio" placeholder="Calle, número exterior, número interior" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="pais" class="col-sm-2 col-form-label">Pais</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="pais" placeholder="Mexico" value="Mexico">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="estado" placeholder="Estado de mexico" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="municipio" class="col-sm-2 col-form-label">Municipio</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="municipio" placeholder="" required>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="codigo_postal" class="col-sm-2 col-form-label">Código postal</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="codigo_postal" placeholder="código postal" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="referencias" class="form-label">Referencias</label>
                                    <textarea class="form-control" name="referencias" rows="3"></textarea>
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
                                <?php
                                if (isset($_SESSION['shopping_car'])) {
                                    $shopping_car = [];
                                    $total = 0;
                                    $ids = [];
                                    foreach ($_SESSION['shopping_car'] as $key => $product) {

                                        $result = Product::getById($key);
                                        $ids[] = $result['id_producto'];
                                        $total += $result['precio_unitario'];
                                        array_push($shopping_car, $result);
                                    }
                                }
                                ?>
                                <div id="catalogo" class="container pb-5">
                                    <div id="imagenes">
                                        <div class="row">
                                            <?php
                                            foreach ($shopping_car as $product) {
                                            ?>
                                                <div class="col-lg-4">
                                                    <div class="card border border-secondary justify-content-center align-items-center" style="width: 18rem;">
                                                        <img class="card-img-top" src="<?= $product['imagen'] ?>" style="width:100px; height:100px;">
                                                        <div class="card-body text-center">
                                                            <h5 class="card-title"><?= $product['producto'] ?></h5>
                                                            <p class="card-text">Talla:<?= $product['talla']; ?></p>
                                                            <p class="card-text">Color:<?= $product['color']; ?></p>
                                                            <p class="card-text">Precio<?= $product['precio_unitario']; ?></p>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="mb-3 row">
                                              
                                            <label for="total_compra" class="col-sm-2 col-form-label">TOTAL: <?=$total;?></label>
                                            <input type="hidden" class="form-control" name="total_compra" value="<?= $total; ?>">
                                            <input type="hidden" class="form-control" name="productos[]" value="<?php serialize($ids); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-secondary me-md-2" type="reset">Limpiar</button>
                                    <button class="btn btn-primary" type="submit" id="checkout-button" name="confirmar">Siguiente</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
    
  <script type="text/javascript">
    // Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe("pk_test_51IvQ5dHs2HTg1BKNXgzwT7oG9KPnWNgVroz2HSq832Sz9kcuCeeEEScVW7XqN6qZuJ4fkiugfGh80vdVfGAeqQis00fwme1DCQ");
    var checkoutButton = document.getElementById("checkout-button");

    checkoutButton.addEventListener("click", function () {
      fetch("create-checkout-session.php", {
        method: "POST",
      })
        .then(function (response) {
          return response.json();
        })
        .then(function (session) {
          return stripe.redirectToCheckout({ sessionId: session.id });
        })
        .then(function (result) {
          // If redirectToCheckout fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using error.message.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function (error) {
          console.error("Error:", error);
        });
    });
  </script>

</html>