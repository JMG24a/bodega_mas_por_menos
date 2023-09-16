<?php
  class EmployeesModel extends Model{

    public function __construct(){
      parent::__construct();
    }

    public function insert($data){

    }

    public function get_employees(){
      $data = [];
      $sql = "SELECT * FROM empleados";
      try{
        $query = $this->db->connect()->query($sql);
        while($row = $query->fetch()){
          $item['id'] = $row['id'];
          $item['name'] = $row['name'];
          $item['lastname'] = $row['lastname'];
          $item['dni'] = $row['dni'];
          $item['role'] = $row['role'];
          $item['age'] = $row['age'];
          $item['email'] = $row['email'];
          $item['password'] = $row['password'];
          $item['phone'] = $row['phone'];
          $item['address'] = $row['address'];
          $item['reference'] = $row['reference'];
          $item['state'] = $row['state'];
          $item['city'] = $row['city'];
          array_push($data, $item);
        }
        return $data;
      }catch(PDOException $e){
        return false;
      }
    }

    public function get_employee_by_id($id){
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
        $data['id'] = $row['id'];
        $data['name'] = $row['name'];
        $data['lastname'] = $row['lastname'];
        $data['dni'] = $row['dni'];
        $data['role'] = $row['role'];
        $data['age'] = $row['age'];
        $data['email'] = $row['email'];
        $data['password'] = $row['password'];
        $data['phone'] = $row['phone'];
        $data['address'] = $row['address'];
        $data['reference'] = $row['reference'];
        $data['state'] = $row['state'];
        $data['city'] = $row['city'];
        //guardar datos en el modelo
        return $data;
      }catch(PDOException $e){
        return false;
      }
    }

    // public function delete_employee($id){
    //   $sql = "DELETE FROM empleados WHERE id = '" . $id . "'";
    //   try{
    //     $query = $this->db->connect()->query($sql);
    //     $row = $query->fetch();
    //     echo $row;
    //     return 0;
    //   }catch(PDOException $e){
    //     return false;
    //   }

    // }

    public function get_user(){
      //buscar empleado registrado
      $result = $this->employee->get_user();
      return $result;
    }
  }

