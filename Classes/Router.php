<?php

class Router{


  public static function get($path, $controller,$method)
  {
    if ($_SERVER["REQUEST_URI"] === $path) {
        $controller = new $controller();

        if (method_exists($controller, $method)) {
            $controller->$method();
        } else {
            var_dump("method not found");
            die();
        }
    }
}

}