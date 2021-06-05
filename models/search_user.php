<?php



require_once("conexion.php");

$salida = "";
$resultado = "";

$users = Conexion::conectar()->prepare("SELECT * FROM usuario WHERE name NOT LIKE '' ORDER By id_usuario");

    if (isset($_POST['consulta'])) {
        $search = $_POST['consulta'];
    	$users = Conexion::conectar()->prepare("SELECT * FROM usuario WHERE id_usuario LIKE '%$search%' OR nombre LIKE '%$search%' OR apellido_paterno LIKE '%$search%' OR apellido_materno LIKE '%$search%' ");
        $users->execute();
        $resultado = $users->fetchAll(PDO::FETCH_ASSOC);
    }

    if ($resultado >0) {

    	$salida.="
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12'>
                <div class='table-responsive'>
                    <table border=1 class='tabla_datos table table-hover'>
    			        <thead>
    				        <tr id='titulo'>
                                <th scope='col'>ID USUARIO</th>
                                <th scope='col'>ID ROL</th>
                                <th scope='col'>ID GENERO</th>
                                <th scope='col'>NOMBRE</th>
                                <th scope='col'>APELLIDO PATERNO</th>
                                <th scope='col'>APELLIDO MATERNO</th>
                                <th scope='col'>FECHA NACIMIENTO</th>
                                <th scope='col'>TELEFONO</th>
                                <th scope='col'>EMAIL</th>
                                <th scope='col'>USUARIO</th>
                                <th scope='col'>CONTRASEÑA</th>
    				        </tr>
    			        </thead>
    			    <tbody>";

    	foreach ($resultado as $fila) {
    		$salida.="<tr>
                        <td>".$fila['id_usuario']."</td>
                        <td>".$fila['id_rol_usuario']."</td>
                        <td>".$fila['id_genero_usuario']."</td>
                        <td>".$fila['nombre']."</td>
                        <td>".$fila['apellido_paterno']."</td>
                        <td>".$fila['apellido_materno']."</td>
                        <td>".$fila['fecha_nacimiento']."</td>
                        <td>".$fila['telefono']."</td>
                        <td>".$fila['email']."</td>
                        <td>".$fila['usuario_sesion']."</td>
                        <td>".$fila['contrasena']."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table></div></div></div></div>";
    }else{
    	$salida.="
            <div class='container'>
                <div class='row'>
                    <div class='col-sm-12'>
                        <div class='alert alert-danger'>
                            <strong>No hay datos.</strong>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
    echo $salida;
?>

  