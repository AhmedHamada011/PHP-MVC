<?php

class Router
{
  public static function get($controller, $method)
  {

    if($_SERVER["REQUEST_URI"] === "/")
      header("location:?page=1");
    $controller = new $controller();

    if (method_exists($controller, $method)) {

      $controller->$method();

    }
  }


  public static function get_all($controller, $method)
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


  public static function get_product_with_name($controller, $method)
  {
      $controller = new $controller();
      if (method_exists($controller, $method)) {
        $name = self::getName($_SERVER["REQUEST_URI"]);
        $controller->$method($name);
      }
  }


  private static function getId($url){

    $url = str_replace("/","",$url);
    return is_numeric($url) ? $url : error(404);
  }


  private static function getName($url){
    $url = str_replace("search=","",parse_url($url)["query"]);
    return !empty($url) ? $url : error(404);
  }

}
