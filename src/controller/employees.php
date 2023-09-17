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

    function post(){
      session_start();
      $employee = $_SESSION['employee'];
      $this->view->employee = $employee;
      if($employee['role'] !== 'admin'){
        header("Location: /home");
      }
      $this->view->render('home/form_employee');
    }

    function edit_save($param = null){
      $id = $param[0];
      $data = [];
      $data['id'] = $id;
      $data['name'] = $_POST['email'];
      $data['lastname'] = $_POST['password'];
      $data['dni'] = $_POST['email'];
      $data['age'] = $_POST['password'];
      $data['email'] = $_POST['email'];
      $data['phone'] = $_POST['phone'];
      $data['role'] = $_POST['email'];
      $data['password'] = $_POST['password'];
      $data['address'] = $_POST['password'];
      $data['reference'] = $_POST['email'];
      $data['state'] = $_POST['password'];
      $data['city'] = $_POST['email'];

      $this->model->edit_save($data);
      header("Location: /employees");
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
