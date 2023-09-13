<?php
  class HomeModel extends Model{

    public function __construct(){
      parent::__construct();
    }

    public function get_products(){
      $data = [];
      $sql = "SELECT * FROM productos";
      //buscar productos
      try{
        $query = $this->db->connect()->query($sql);
        $row = $query->fetch();
        $data['name'] = $row['name'];
        $data['quantity'] = $row['quantity'];
        $data['id'] = $row['id'];
        $data['price'] = $row['price'];
        $data['image'] = $row['image'];
        $data['category'] = $row['category'];
        //guardar datos en el modelo
        $this->employee->save_user($data);
        return 0;
      }catch(PDOException $e){
        return [];
      }
      $query = $this->db->connect()->query($sql);
      return $result;
    }
  }



