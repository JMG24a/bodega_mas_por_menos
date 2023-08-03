<?php
  class DB{
    private $HOST;
    private $DB;
    private $CHARSET;
    private $PASSWORD;
    private $USER;

    public function __construct(){
      $this->host = constant('HOST');
      $this->db = constant('DB');
      $this->charset = constant('CHARSET');
      $this->password = constant('PASSWORD');
      $this->user = constant('USER');
    }

    function connect(){
      try{
        $connect = "mysql:host=" . $this->host . ";dbname=" . $this->db . ":charset=" . $this->charset;
        $options = [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_EMULATE_PREPARES => false
        ];
        $pdo = new PDO($connect, $this->user, $this->password, $options);
        return $pdo;
      }catch(PDOException $e){
        print_r('Error de conexion con la base de datos' . $e->getMessage());
      }
    }
  }
?>
