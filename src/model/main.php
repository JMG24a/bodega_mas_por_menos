<?php
  class MainModel extends Model{

    public function __construct(){
      parent::__construct();
    }

    public function insert($data){
      $query = $this->db->connect()->prepare('INSERT INTO EMPLEADOS (NOMBRE,CEDULA,CARGO,PASSWORD) VALUES(:nombre, :cedula, :cargo, :password)');
      $query->execute([
        'nombre' => "Jose Morales",
        'cedula' => $data['cedula'],
        'cargo'  => "administrador",
        'password' => $data['password']
      ]);
    }
  }
?>
