<?php
  class Model{
    function __construct(){
      $this->db = new DB();
      $this->employee = new Employee();
      $this->product = new Product();
    }
  }
?>
