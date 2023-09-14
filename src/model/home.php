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
        while($row = $query->fetch()){
          $item['name'] = $row['name'];
          $item['quantity'] = $row['quantity'];
          $item['id'] = $row['id'];
          $item['price'] = $row['price'];
          $item['image'] = $row['image'];
          $item['category'] = $row['category'];
          array_push($data, $item);
        }
        //guardar datos en el modelo
        $this->product->save_products($data);
        $response = $this->product->get_products($data);
        return $response;
      }catch(PDOException $e){
        return [];
      }
      $query = $this->db->connect()->query($sql);
      return $result;
    }
  }



