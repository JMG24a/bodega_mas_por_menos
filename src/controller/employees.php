<?php
  class Employees extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->employee = [];
    }

    function render(){
      session_start();
      $employee = $_SESSION['employee'];
      $this->view->employee = $employee;
      if($employee['role'] !== 'admin'){
        header("Location: /home");
      }
      $this->view->render('home/employees');
    }

    function get(){
      $result = $this->model->get_employees();
      $response = [
        'mensaje' => 'Respuesta exitosa',
        'datos' => $result,  // Los datos que deseas enviar de vuelta al cliente
      ];
      header('Content-Type: application/json');
      echo json_encode($response);
    }

    function delete($id){
      $result = $this->model->delete_employee();
      $response = [
        'mensaje' => 'Respuesta exitosa',
        'datos' => $result,  // Los datos que deseas enviar de vuelta al cliente
      ];
      header('Content-Type: application/json');
      echo json_encode($response);
    }
  }
?>
