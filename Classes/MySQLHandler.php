<?php

class MySQLHandler{

  public $handler;
  public function __construct()
  {
    $this->connect();
  }

  private function connect(){

    try {

      $this->handler = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

    }catch(Exception $e){
      
      die("There is an error");
    }

  }

  public function query_all($table){
    $sql = "SELECT * FROM `$table`";


    return $this->get_results($sql);
  }

  public function query_records_by_page($table,$limit=0){
    $sql = "SELECT * FROM `$table` LIMIT " .  (($limit-1) * RECORD_PER_PAGE) . "," . RECORD_PER_PAGE;


    
    return $this->get_results($sql);
  }




  private function get_results($sql){

    
    $result = $this->handler->query($sql);
    

    return $result;
  }

}