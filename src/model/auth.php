<?php
  class AuthModel extends Model{

    public function __construct(){
      parent::__construct();
    }

    public function insert($data){

    }

    public function login($id){
      $data = [];
      $sql = "SELECT * FROM empleados WHERE email = '" . $id . "'";
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
  }










//   public function insert($data){
//     echo "insertar datos";
//     $query = $this->db->connect()->prepare('INSERT INTO empleados (name,id,role,password,phone,address,state,city,reference,account_id) VALUES(:name, :id, :role, :password, :phone, :address, :state, :city, :reference, :account_id)');
//     $query->execute([
//       'name' => "Jose Morales",
//       'id' => 'V27436179',
//       'role'  => "admin",
//       'password' => '12345678Aa@',
//       'phone' => '04120328398',
//       'address' => 'calle 3 entre 1 y 2 barrio union',
//       'state' => 'lara',
//       'city' => 'barquisimeto',
//       'reference' => 'a dos calles del seguro',
//       'account_id' => 1
//     ]);
//   }
// }
?>
