<?php
  class DB{
    private $HOST;
    private $DB;
    private $USER;
    private $PASSWORD;
    private $CHARSET;

    public function __construct(){
      $this->host = constant('HOST');
      $this->db = constant('DB');
      $this->user = constant('USER');
      $this->password = constant('PASSWORD');
      $this->charset = constant('CHARSET');
    }

    public function connect(){
      try{
        $connection = "mysql:host=db;port=3306;dbname=data_uptaeb";
        // $connection = "mysql:host=" . $this->host . ";port=6033" . ";dbname=" . $this->db;
        $options = [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_EMULATE_PREPARES => false,
        ];
        $pdo = new PDO($connection, $this->user, $this->password, $options);
        return $pdo;
      }catch(PDOException $e){
        print_r('Error de conexion con la base de datos' . $e->getMessage());
      }
    }
  }
?>
