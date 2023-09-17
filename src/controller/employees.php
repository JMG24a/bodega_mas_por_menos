<?php
  class Employees extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->employee = [];
      $this->view->edit = [];
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

    function edit($param = null){
      $id = $param[0];
      session_start();
      $employee = $_SESSION['employee'];
      $this->view->employee = $employee;
      $result = $this->model->get_employee_by_id($id);
      $this->view->edit = $result;
      $this->view->render('home/form_employee');
    }

    function edit_save(){
      session_start();
      $employee = $_SESSION['employee'];
      $this->view->employee = $employee;
      $this->view->render('home/form_employee');
    }

    function post(){
      session_start();
      $employee = $_SESSION['employee'];
      $this->view->employee = $employee;
      if($employee['role'] !== 'admin'){
        header("Location: /home");
      }
      $this->view->render('home/form_employee');
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
