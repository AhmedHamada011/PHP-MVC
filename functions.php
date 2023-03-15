<?php

function view($file,$attributes = []){

  $file = str_replace(".","/",$file);
  $path = "views/$file.view.php";

  if (file_exists($path)) {
    extract($attributes);
    require_once("views/$file.view.php");
  }
  else
    error(404);
}

function error($code){

  require_once("views/errors/$code.view.php");

}


function dd($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";

  die();
} 