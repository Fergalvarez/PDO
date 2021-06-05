<?php
class GraphicController
{

  static function new()
  { 
    include "views/modules/grafica.php";
  }
  
  static function create()
  {
      $result = Graphic::create();
      include "views/modules/grafica.php";

  }

  
}