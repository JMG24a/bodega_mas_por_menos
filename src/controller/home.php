<?php
  class Home extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->employee = [];
    }

    function render(){
      session_start();
      $employee = $_SESSION['employee'];
      $this->view->employee = $employee;
      $this->view->render('home/home');
    }

    function get_products(){
      $result = $this->model->get_products();
      $response = [
        'mensaje' => 'Respuesta exitosa',
        'datos' => $result,  // Los datos que deseas enviar de vuelta al cliente
      ];
      header('Content-Type: application/json');
      echo json_encode($response);
    }
  }
?>
