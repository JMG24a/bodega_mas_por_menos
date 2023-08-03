<?php
  class Config extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->render('setting/config');
    }

    function saludo(){
      echo "registrado";
      $this->model->insert();
    }
  }
?>
