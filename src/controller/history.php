<?php
  class History extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->employee = [];
    }

    function render(){
      session_start();
      $employee = $_SESSION['employee'];
      $this->view->employee = $employee;
      $this->view->render('home/history');
    }

    function saludo(){
      echo "registrado";
      $this->model->insert();
    }
  }
?>
