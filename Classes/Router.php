<?php

class Router
{
  public static function get($controller, $method)
  {

    $controller = new $controller();

    if (method_exists($controller, $method)) {

      $controller->$method();

    }
  }

  public static function post($controller, $method)
  {
    $controller = new $controller();

    if (method_exists($controller, $method)) {

      $controller->$method($_POST);

    }
  }

  public static function get_product_with_id($controller, $method)
  {
      $controller = new $controller();
      if (method_exists($controller, $method)) {
        $id = self::getId($_SERVER["REQUEST_URI"]);
        $controller->$method($id);
      }
  }



  public static function get_page($controller, $method)
  {
    $queries = [];
    parse_str($_SERVER['QUERY_STRING'], $queries);

    $page = intval($queries["page"]);

    $controller = new $controller();
    if (method_exists($controller, $method)) {
      $controller->$method($page);
    }
  }





  private static function getId($url){

    $url = str_replace("/","",$url);
    return is_numeric($url) ? $url : error(404);
  }

}
