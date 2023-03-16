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

  public function query_record_by_id($table, $id){

    $sql = "SELECT * FROM `$table` WHERE id=" . intval($id);

    return $this->get_results($sql);

  }


  public function insert($table,$data){

    $sql = "INSERT INTO `$table` ( ";

    foreach($data as $column => $value){

      $sql .= "$column, ";

    }
    $sql .= ")";
    $sql = str_replace(", )", ")", $sql);

    $sql .= " VALUES (";

    foreach($data as $column => $value){

      $sql .= "'$value', ";

    }

    $sql .= ")";
    $sql = str_replace(", )", ")", $sql);

    $result = $this->get_results($sql);

    return $result;

  }


  private function get_results($sql){

    
    $result = $this->handler->query($sql);
    

    return $result;
  }




}