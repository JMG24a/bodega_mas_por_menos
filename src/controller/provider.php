<?php
  class Provider extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->employee = [];
    }

    function render(){
      session_start();
      $employee = $_SESSION['employee'];
      $this->view->employee = $employee;
      $this->view->render('home/provider');
    }

    function login(){
      $items = [];
      try{
        $this->model->login();
      }catch(PDOException $e){
        return [];
      }
    }
  }
?>
