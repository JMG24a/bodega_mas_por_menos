<?php
  class Product{
    public $storage = [];

    public function save_products($data){
      $this->storage = $data;
    }

    public function get_products(){
      return $this->storage;
    }
  }
?>
