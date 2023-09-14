<?php
  class EmployeesModel extends Model{

    public function __construct(){
      parent::__construct();
    }

    public function insert($data){

    }

    public function login($id){
      $data = [];
      $sql = "SELECT * FROM empleados WHERE id = '" . $id . "'";
      try{
        $query = $this->db->connect()->query($sql);
        $row = $query->fetch();
        $query->execute();
        if ($query->rowCount() === 0) {
          // No se encontraron resultados
          return false;
        }
        $data['name'] = $row['name'];
        $data['role'] = $row['role'];
        $data['id'] = $row['id'];
        $data['password'] = $row['password'];
        $data['address'] = $row['address'];
        $data['reference'] = $row['reference'];
        $data['state'] = $row['state'];
        $data['city'] = $row['city'];
        $data['account_id'] = $row['account_id'];
        $data['phone'] = $row['phone'];
        //guardar datos en el modelo
        $this->employee->save_user($data);
        return 0;
      }catch(PDOException $e){
        return false;
      }
    }

    public function get_user(){
      //buscar empleado registrado
      $result = $this->employee->get_user();
      return $result;
    }
  }

