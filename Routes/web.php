<?php


if($_SERVER["REQUEST_URI"] === "/")
  Router::get("SunglassController","get_index");
elseif($_SERVER["REQUEST_URI"] === "/all")
  Router::get_all("SunglassController","get_all");
elseif(preg_match('#/[0-9]+#', $_SERVER["REQUEST_URI"]))
  Router::get_product_with_id("SunglassController","get_product");
elseif(preg_match('#/?page=[0-9]+#', $_SERVER["REQUEST_URI"]))
  Router::get_page("SunglassController","get_product_page");
elseif($_SERVER["REQUEST_URI"] === "/create")
  Router::get("SunglassController","get_create_page");
elseif($_SERVER["REQUEST_URI"] === "/insert")
  Router::post("SunglassController","store");
elseif(preg_match('#/?search=[a-zA-Z]+#', $_SERVER["REQUEST_URI"]))
  Router::get_product_with_name("SunglassController","get_product_with_name");





