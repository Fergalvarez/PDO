<?php
    class Enlaces{
        public static function enlacesModel($enlaces){

            if($enlaces == "registro"){

                $module = "views/modules/".$enlaces.".php";
            }
            else if($enlaces == "index"){
                
                $module = "views/modules/mostrar.php";
            }
            else if($enlacesm == "ok"){

                $module = "views/modules/registro.php";
            }

            else{
                
                $module = "views/modules/mostrar.php";

            }
    
            return $module;
        }
    }

?>