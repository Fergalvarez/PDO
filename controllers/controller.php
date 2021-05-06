<?php

Class crudController{

    public function plantilla(){
        
                require_once("views/template.php");
            }

    public function enlaces(){
        
        if(isset($_GET["action"])){

			$enlaces = $_GET["action"];

		}

		else{

			$enlaces = "index";
		}

        $respuesta = Enlaces::enlacesModel($enlaces);

		include $respuesta;

    }
        

    public function altaUsuarioController(){

        if (isset($_POST['userType'])) {
            $datos = array("tipo_usuario"=>$_POST['tipo_usuario'],
                        "genero"=>$_POST['genero'],
                        "nombre"=>$_POST['nombre'],
                        "apellido_paterno" => $_POST['apellido_paterno'],
                        "apellido_materno" => $_POST['apellido_materno'],
                        "fecha_nacimiento" => $_POST['fecha_nacimiento'],
                        "telefono" => $_POST['telefono'],
                        "email"=>$_POST['email'],
                        "usuario_sesion"=> $_POST['usuario_sesion'],
                        "contraseña"=>$_POST['contraseña'],
                        "confirmacion_contraseña"=>$_POST['confirmacion_contraseña']);

            $respuesta = Crud::altaUsuarioModel($datos,"usuario");
            
            if($respuesta == "success"){

                header("location:index.php?action=ok");
            }

            else{
                header("location:index.php");
            }

        }
    }
}

?>