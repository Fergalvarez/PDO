<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Registro</title>
</head>

<body>

    <div class="container pb-5">
        <div class="row">
            <div class="col pt-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Registro de usuario</h5>
                        <form action="?action=crear_usuario" method="post">
                            <!--<div class="mb-3 row">
                                <label for="tipo_usuario" class="col-sm-2 col-form-label">Usuario</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="tipo_usuario" required>
                                    <?php foreach ($rol as $value) { ?>
                                            <option value="<?= $value['id_rol_usuario'] ?>" <?= $value['id_rol_usuario'] == $usuario['id_genero_usuario'] ? 'selected' : '' ?>>
                                                <?= $value['rol'] ?>
                                            </option>;
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>-->
                            <div class="mb-3 row">
                                <label for="genero" class="col-sm-2 col-form-label">Género</label>
                                <div class="col-sm-10">
                                    <select class="form-select" aria-label="Default select example" name="genero">
                                        <option>Selecciona</option>
                                        <?php foreach ($generos as $value) { ?>
                                            <option value="<?= $value['id_genero_usuario'] ?>" <?= $value['id_genero_usuario'] == $usuario['id_genero_usuario'] ? 'selected' : '' ?>>
                                                <?= $value['genero'] ?>
                                            </option>;
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nombre" class="col-sm-2 col-form-label">Nombre completo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombre" placeholder="nombre" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="apellido_paterno" class="col-sm-2 col-form-label">Apellido paterno</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="apellido_paterno" placeholder="apellido paterno" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="apellido_materno" class="col-sm-2 col-form-label">Apellido materno</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="apellido_materno" placeholder="apellido materno" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="fecha_naciiento" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="fecha_nacimiento" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="telefono" placeholder="55 5555 5555" max="10" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-2 col-form-label">Correo electrónico</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" placeholder="usuario@dominio" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usuario_sesion" class="col-sm-2 col-form-label">Usuario de sesión</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="usuario_sesion" placeholder="Nombre de usuario" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="contrasena" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="contrasena" placeholder="*****" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="confirmacion_contraseña" class="col-sm-2 col-form-label">Confirmar contraseña</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="confirmacion_contrasena" required>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-secondary me-md-2" type="reset">Limpiar</button>
                                <button class="btn btn-primary" type="submit" name="guardar">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>