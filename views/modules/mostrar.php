<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID USUARIO</th>
      <th scope="col">ID ROL</th>
      <th scope="col">ID GENERO</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO PATERNO</th>
      <th scope="col">APELLIDO MATERNO</th>
      <th scope="col">FECHA NACIMIENTO</th>
      <th scope="col">TELEFONO</th>
      <th scope="col">EMAIL</th>
      <th scope="col">USUARIO</th>
      <th scope="col">CONTRASEÑA</th>
      <th scope="col">EDITAR</th>
      <th scope="col">ELIMINAR</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($results as $key => $value) { ?>
      <tr>
        <td><?= $value['id_usuario'] ?></td>
        <td><?= $value['id_rol_usuario'] ?></td>
        <td><?= $value['id_genero_usuario'] ?></td>
        <td><?= $value['nombre'] ?></td>
        <td><?= $value['apellido_paterno'] ?></td>
        <td><?= $value['apellido_materno'] ?></td>
        <td><?= $value['fecha_nacimiento'] ?></td>
        <td><?= $value['telefono'] ?></td>
        <td><?= $value['email'] ?></td>
        <td><?= $value['usuario_sesion'] ?></td>
        <td><?= $value['contraseña'] ?></td>
        <td>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>