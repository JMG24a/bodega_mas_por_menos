<?php
  class Setting extends Controller{
    function __construct(){
      parent::__construct();
    }

    function render(){
      $this->view->render('home/setting');
    }

    function saludo(){
      echo "registrado";
      $this->model->insert();
    }
  }
?>
