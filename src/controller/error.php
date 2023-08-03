<?php
  class Errors extends Controller{
    function __construct(){
      parent::__construct();
      $this->view->message = 'Error 404';
      $this->view->render('message/error');
    }
  }
?>
