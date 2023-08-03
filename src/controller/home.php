<?php
  class Home extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->render('home/index');
    }

    function saludo(){
      echo "registrado";
      $this->model->insert();
    }
  }
?>
