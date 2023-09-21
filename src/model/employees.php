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


    public function get_employee_by_email($email){
      $sql = "SELECT * FROM empleados WHERE id = '" . $email . "'";
      try{
        $query = $this->db->connect()->query($sql);
        $row = $query->fetch();
        $query->execute();
        if ($query->rowCount() === 0) {
          // No se encontraron resultados
          return false;
        }
        return true;
      }catch(PDOException $e){
        return false;
      }
    }

    public function edit_save($data){
      try{
        $exist = $this->get_employee_by_email($data['id']);
        if(!$exist){
          // No se encontraron resultados
          $insert_sql = "INSERT INTO empleados (name, lastname, dni, role, age, email, password, phone, address, reference, state, city)
          VALUES (:name, :lastname, :dni, :role, :age, :email, :password, :phone, :address, :reference, :state, :city)";
          $insert = $this->db->connect()->prepare($insert_sql); // Cambia query() a prepare()
          $insert->execute([
            ':name' => $data['name'], // Usa los nombres de los parámetros correctos aquí
            ':lastname' => $data['lastname'],
            ':dni' => $data['dni'],
            ':role' => $data['role'],
            ':age' => $data['age'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':phone' => $data['phone'],
            ':address' => $data['address'],
            ':reference' => $data['reference'],
            ':state' => $data['state'],
            ':city' => $data['city'],
          ]);
          return $insert;
        }

        $idEmpleado = $data['id'];
        $nuevoNombre = $data['name'];
        $nuevoApellido = $data['lastname'];
        $nuevoDni = $data['dni'];
        $nuevoRole = $data['role'];
        $nuevaEdad = $data['age'];
        $nuevoEmail = $data['email'];
        $nuevaPassword = $data['password'];
        $nuevoPhone = $data['phone'];
        $nuevaDireccion = $data['address'];
        $nuevaReferencia = $data['reference'];
        $nuevoEstado = $data['state'];
        $nuevaCiudad = $data['city'];

        $update_sql = "UPDATE empleados SET name = ?, lastname = ?, dni = ?, role = ?, age = ?, email = ?, password = ?, phone = ?, address = ?, reference = ?, state = ?, city = ? WHERE id = ?";

        $update = $this->db->connect()->prepare($update_sql);
        $update->bindParam(1, $nuevoNombre, PDO::PARAM_STR);
        $update->bindParam(2, $nuevoApellido, PDO::PARAM_STR);
        $update->bindParam(3, $nuevoDni, PDO::PARAM_STR);
        $update->bindParam(4, $nuevoRole, PDO::PARAM_STR);
        $update->bindParam(5, $nuevaEdad, PDO::PARAM_INT);
        $update->bindParam(6, $nuevoEmail, PDO::PARAM_STR);
        $update->bindParam(7, $nuevaPassword, PDO::PARAM_STR);
        $update->bindParam(8, $nuevoPhone, PDO::PARAM_STR);
        $update->bindParam(9, $nuevaDireccion, PDO::PARAM_STR);
        $update->bindParam(10, $nuevaReferencia, PDO::PARAM_STR);
        $update->bindParam(11, $nuevoEstado, PDO::PARAM_STR);
        $update->bindParam(12, $nuevaCiudad, PDO::PARAM_STR);
        $update->bindParam(13, $idEmpleado, PDO::PARAM_INT);

        $sql3 = $update->execute();

        return $sql3;
        }catch(PDOException $e){
          echo $e;
        }
    }

    public function delete_employee($id){
      $sql = "DELETE FROM empleados WHERE id = :id";
      try{
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        if ($query->execute()) {
          $employees = $this->get_employees();
          return $employees;
      } else {
          return [];
      }
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

