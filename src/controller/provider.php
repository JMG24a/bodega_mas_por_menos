<?php
  class Provider extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->render('home/provider');
    }

    function saludo(){
      echo "registrado";
      $this->model->insert();
    }
  }
?>
