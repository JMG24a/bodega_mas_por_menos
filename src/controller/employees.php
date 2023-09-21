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
      $data['id'] = $id;
      $data['name'] = $_POST['name'];
      $data['lastname'] = $_POST['lastname'];
      $data['dni'] = $_POST['dni'];
      $data['age'] = $_POST['age'];
      $data['email'] = $_POST['email'];
      $data['phone'] = $_POST['phone'];
      $data['role'] = $_POST['role'];
      $data['password'] = $_POST['password'];
      $data['address'] = $_POST['address'];
      $data['reference'] = $_POST['reference'];
      $data['state'] = $_POST['state'];
      $data['city'] = $_POST['city'];
      //guardar o editar informacion
      $this->model->edit_save($data);
      header("Location: /employees");
    }

    function deletes($param = null){
      $id = $param[0];
      $result = $this->model->delete_employee($id);
      $response = [
        'mensaje' => 'Respuesta exitosa',
        'datos' => $result,  // Los datos que deseas enviar de vuelta al cliente
      ];
      header('Content-Type: application/json');
      echo json_encode($response);
    }
  }
?>
