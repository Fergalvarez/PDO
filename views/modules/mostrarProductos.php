<div class="container">
<div class="table-responsive">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID PRODUCTO</th>
      <th scope="col">ID CATEGORA</th>
      <th scope="col">ID GENERO</th>
      <th scope="col">PRODUCTO</th>
      <th scope="col">COLOR</th>
      <th scope="col">TALLA</th>
      <th scope="col">CANTIDAD</th>
      <th scope="col">PRECIO</th>
      <th scope="col">IMAGEN</th>
      <th scope="col">EDITAR</th>
      <th scope="col">ELIMINAR</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($results as $key => $value) { ?>
      <tr>
        <td><?= $value['id_producto'] ?></td>
        <td><?= $value['id_categoria'] ?></td>
        <td><?= $value['id_genero_usuario'] ?></td>
        <td><?= $value['producto'] ?></td>
        <td><?= $value['color'] ?></td>
        <td><?= $value['talla'] ?></td>
        <td><?= $value['cantidad'] ?></td>
        <td><?= $value['precio_unitario'] ?></td>
        <td><?= $value['imagen'] ?></td>
        <td><a class="btn btn-warning" href="?action=editar_producto&id=<?= $value["id_producto"]?>" role="button">EDITAR</a></td>
        <td><a class="btn btn-danger" href="?action=eliminar_producto&id=<?= $value["id_producto"]?>" role="button">ELIMINAR</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</div>