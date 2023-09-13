<?php
  class Provider extends Controller{
    function __construct(){
      parent::__construct();
    }

    function render(){
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
