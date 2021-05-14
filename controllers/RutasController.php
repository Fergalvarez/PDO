<?php

require_once "Modelo/rutas.php";
Class RutasController{
	public function plantilla(){
		include "views/plantilla.php";
		
	}
	
	public function rutas(){
		if (isset($_GET["ruta"]))
		{
			$rutas=$_GET["ruta"];
		}
		else
		{
			$rutas="index";		
		}
		$respuesta=Modelo::rutasModelo($rutas);
		include $respuesta;	
	}
}




?>