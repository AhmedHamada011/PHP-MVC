<?php

class SunglassController
{
    public $db;
    public $table;

    public function __construct()
    {
        $this->table = "items";
        $this->db = new MySQLHandler();
    }

    public function get_all()
    {
        $products = $this->db->query_all($this->table);


        $products = $this->array_change_key_case_recursive($products->fetch_all(MYSQLI_ASSOC));



        view("sunglasses/index", ["products"=> $products]);
    }

    public function get_product($id)
    {
        $product = $this->db->query_record_by_id($this->table, $id);

        $product = array_change_key_case($product->fetch_assoc());

        view("sunglasses/show", ["product"=> $product]);
    }


    public function get_product_page($limit)
    {
        $result = $this->db->query_records_by_page($this->table, $limit);


        $products = $this->array_change_key_case_recursive($result->fetch_all(MYSQLI_ASSOC));


        $total_pages = ceil($this->db->query_all($this->table)->num_rows / RECORD_PER_PAGE);
        $next = $limit < $total_pages ? $limit + 1 : $total_pages;
        $previous = $limit -1 > 0 ? $limit -1 : 1;

        // dd($limit -1 < 0);

        view("sunglasses/index", [
          "current"     => $limit,
          "products"    => $products,
          "total_pages" => $total_pages,
          "next"        => $next,
          "previous"    => $previous
        ]);
    }
    
    private function array_change_key_case_recursive($arr)
    {
      return array_map(function($item){
          if(is_array($item))
            return array_change_key_case($item);
      },array_change_key_case($arr));
    }
    
}
