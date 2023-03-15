<?php

class SunglassController{

  public $db;

  public function __construct()
  {
    $this->db = new MySQLHandler();
  }

  public function get_all(){

    $products = $this->db->query_all("products");


    $products = $products->fetch_all(MYSQLI_ASSOC);

    
    view("sunglasses/index", ["products"=> $products]);
  }

  public function get_product($id){



  }


  public function get_product_page($limit){

    
    $result = $this->db->query_records_by_page("products",$limit);


    $products = $result->fetch_all(MYSQLI_ASSOC);


    $total_pages = ceil($this->db->query_all("products")->num_rows / RECORD_PER_PAGE);
    $next = $limit <= $total_pages ? $limit + 1 : 0;
    $previous = $limit -1 > 0 ? $limit -1 : 0;


    view("sunglasses/index", [
      "products"    => $products,
      "total_pages" => $total_pages,
      "next"        => $next,
      "previous"    => $previous
    ]);



  }

}