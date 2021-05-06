<?php
  
    $obj= new Crud();
    $datos=$obj->mostrarUsuarios();
    $datosdecoded=json_decode($datos);

    $tabla='<table class="table table-striped">
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
                <tbody>';

    $datosTabla="";

    foreach($datosdecoded as $key) {  
        $datosTabla=$datosTabla.'<tr>
              <td>'.$key->id_usuario.'</td>
              <td>'.$key->id_rol_usuario.'</td>
              <td>'.$key->id_genero_usuario.'</td>
              <td>'.$key->nombre.'</td>
              <td>'.$key->apellido_paterno.'</td>
              <td>'.$key->apellido_materno.'</td>
              <td>'.$key->fecha_nacimiento.'</td>
              <td>'.$key->telefono.'</td>
              <td>'.$key->email.'</td>
              <td>'.$key->usuario_sesion.'</td>
              <td>'.$key->contraseña.'</td>
              <td>
		      </td>
			</tr>';

    }
    
    echo $tabla.$datosTabla.'</tbody></table>'

    ?>

public function mostrarUsuarios(){
        $query= "SELECT 'id_usuario', 'id_rol_usuario', 'id_genero_usuario', 'nombre', 'apellido_materno', 'apellido_paterno', 'fecha_nacimiento', 'telefono', 'email', 'usuario_sesion', 'contraseña' FROM usuario";
        $stmt=Conexion::conectar()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}