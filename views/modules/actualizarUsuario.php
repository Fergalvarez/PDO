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
                        <h5 class="card-title text-center">Actualizar usuario</h5>
                        <form action="?action=actualizar_usuario" method="post">
                        <div class="mb-3 row">
                                <label for="id_usuario" class="col-sm-2 col-form-label">ID Usuario</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="id_usuario" value="<?php echo $respuesta->id_usuario; ?>" required>
                                </div>
                            </div>
                            <div class="form-group" hidden>
                                <label for="userType" class="col-sm-2 col-form-label">Usuario</label>
                                <input type="radio" name="tipo_usuario" value="<?php echo $respuesta->id_rol_usuario; ?>" checked>Cliente
                            </div>
                            <div class="mb-3 row">
                                <label for="genero" class="col-sm-2 col-form-label">Género</label>
                                <div class="col-sm-10">
                                <?php
                                        $lista = [
                                        ['id_genero_usuario' => 1, 'name' => "FEMENINO"],
                                        ['id_genero_usuario' => 2, 'name' => "MASCULINO"],
                                        ];

                                        $record=[
                                            'id_genero_usuario' => 1
                                        ];
                                ?>
                                

                                    <select class="form-select" aria-label="Default select example" name="genero">
                                        <option>--Selecciona--</option>
                                        <?php foreach($lista as $value){ ?>
                                            <option value="<?= $value['id_genero_usuario'] ?>" <?= $value['id_genero_usuario'] == $record['id_genero_usuario'] = 1 ? "selected" : "" ?>>
                                            <?= $value['name'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nombre" class="col-sm-2 col-form-label">Nombre completo</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nombre" value="<?php echo $respuesta->nombre; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="apellido_paterno" class="col-sm-2 col-form-label">Apellido paterno</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="apellido_paterno" value="<?php echo $respuesta->apellido_paterno; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="apellido_materno" class="col-sm-2 col-form-label">Apellido materno</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="apellido_materno" value="<?php echo $respuesta->apellido_materno; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="fecha_naciiento" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="fecha_nacimiento" value="<?php echo $respuesta->fecha_nacimiento; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="telefono" value="<?php echo $respuesta->telefono; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-2 col-form-label">Correo electrónico</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" value="<?php echo $respuesta->email; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="usuario_sesion" class="col-sm-2 col-form-label">Usuario de sesión</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="usuario_sesion" value="<?php echo $respuesta->usuario_sesion; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="contrasena" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="contrasena" value="<?php echo $respuesta->contrasena; ?>" required>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="confirmacion_contraseña" class="col-sm-2 col-form-label">Confirmar contraseña</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="confirmacion_contrasena" value="<?php echo $respuesta->confirmacion_contrasena; ?>" required>
                                </div>
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