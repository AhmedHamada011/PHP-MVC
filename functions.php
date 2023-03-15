<?php

function view($file){

  $file = str_replace(".","/",$file);
  $path = "views/$file.view.php";

  if(file_exists($path))
    require_once("views/$file.view.php");
  else
    error(404);

}

function error($code){

  require_once("views/errors/$code.view.php");

}


function dd($var){

  var_dump($var);
  die();
}