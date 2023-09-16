<?php
  class Model{
    function __construct(){
      $this->db = new DB();
      $this->product = new Product();
    }
  }
?>
