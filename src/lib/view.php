<?php
  class View{
    function __construct(){
    }

    function render($viewName){
      require 'view/' . $viewName . '.php';
    }
  }
?>
