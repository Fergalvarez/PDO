<?php


class Modelo
{
	static public function rutasModelo($rutas){
		
		if ($rutas=="registroUsuario"||$rutas=="mostrarUsuario"||$rutas=="actualizarUsuario"||$rutas=="eliminarUsuario")
		{
			$pagina="Vistas/modulos/".$rutas.".php";
		}
		else if($rutas=="index")
		{$pagina="Vistas/modulos/ingreso".".php";
		};	
		
		return $pagina;
	}
}

?>