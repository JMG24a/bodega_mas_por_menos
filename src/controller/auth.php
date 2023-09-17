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
      $email = $_POST['email'];
      $password = $_POST['password'];
      try{
        $response = $this->model->login($email);

        if($response === false){
          $this->view->error = 'Clave o cedula incorrecta';
          $this->view->render('auth');
          return 0;
        }

        if($response['password'] === $password){
          session_start();
          $_SESSION['employee'] = $response;
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
