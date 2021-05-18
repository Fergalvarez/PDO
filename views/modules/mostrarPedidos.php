<div class="container">
<div class="table-responsive">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID COMPRA</th>
      <th scope="col">ID USUARIO</th>
      <th scope="col">ID CARRITO DE COMPRA</th>
      <th scope="col">ID TIPO DE PAGO</th>
      <th scope="col">DOMICILIO</th>
      <th scope="col">PAIS</th>
      <th scope="col">ESTADO</th>
      <th scope="col">MUNICIPIO</th>
      <th scope="col">CODIGO POSTAL</th>
      <th scope="col">REFERENCIAS</th>
      <th scope="col">FECHA DE PEDIDO</th>
      <th scope="col">EDITAR</th>
      <th scope="col">ELIMINAR</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($results as $key => $value) { ?>
      <tr>
        <td><?= $value['id_compra'] ?></td>
        <td><?= $value['id_usuario'] ?></td>
        <td><?= $value['id_carrito_compra'] ?></td>
        <td><?= $value['id_pago'] ?></td>
        <td><?= $value['domicilio'] ?></td>
        <td><?= $value['pais'] ?></td>
        <td><?= $value['estado'] ?></td>
        <td><?= $value['municipio'] ?></td>
        <td><?= $value['codigo_postal'] ?></td>
        <td><?= $value['referencias'] ?></td>
        <td><?= $value['fecha_compra'] ?></td>
        <td><a class="btn btn-warning" href="?action=editar_pedido&id=<?= $value["id_compra"]?>" role="button">EDITAR</a></td>
        <td><a class="btn btn-danger" href="?action=eliminar_pedido&id=<?= $value["id_compra"]?>" role="button">ELIMINAR</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div>