<?php

interface DBHandler{
  public function query_all($table);
  public function query_records_by_page($table,$limit=0);
  public function query_record_by_id($table, $id);
  public function search_with_name($table, $name);
  public function insert($table,$data);

}