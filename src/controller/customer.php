<?php
  class Customer extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->render('home/customer');
    }

    function saludo(){
      echo "registrado";
      $this->model->insert();
    }
  }
?>
