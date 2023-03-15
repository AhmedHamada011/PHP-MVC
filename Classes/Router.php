<?php

class Router{


  public static function get($path, $controller,$method)
  {
    $controller = new $controller();

    if(method_exists($controller,$method)){
      $controller->$method();
    }else{
      var_dump("method not found");
      die();
    }
  }

}