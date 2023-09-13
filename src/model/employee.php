<?php
  class Employee{
    public $storage = [];

    public function save_user($data){
      $this->storage = $data;
    }

    public function get_user(){
      return $this->storage;
    }
  }
?>
