<?php
  class Auth extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->error = '';
    }

    function render(){
      $this->view->render('auth');
    }

    function init_session(){
      $id = $_POST['cedula'];
      $password = $_POST['password'];
      try{
        $response = $this->model->login($id);
        $employee = $this->model->get_user();

        if($response === false){
          $this->view->error = 'Clave o cedula incorrecta';
          $this->view->render('auth');
          return 0;
        }

        if($employee['password'] === $password){
          session_start();
          $_SESSION['employee'] = $employee;
          header("Location: /home");
        }else{
          $this->view->error = 'Clave o cedula incorrecta';
          $this->view->render('auth');
          return 0;
        }
      }catch(Exception $e){
        echo $e->getMessage();
      }
    }
  }
?>
