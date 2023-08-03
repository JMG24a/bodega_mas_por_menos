<?php
  class Main extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->render('main/index');
    }

    function init_session(){
      $user = $_POST['cedula'];
      $password = $_POST['password'];

      // echo $user . " " . $password;

      // $this->model->insert([
      //   'cedula' => $user,
      //   'password' => $password
      // ]);
      // header("location:/course.php");

      $this->view->render('components/layout/footer');
    }
  }
?>
