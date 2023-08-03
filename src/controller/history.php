<?php
  class History extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->render('home/history');
    }

    function saludo(){
      echo "registrado";
      $this->model->insert();
    }
  }
?>
