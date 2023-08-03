<?php
  require_once 'controller/error.php';

  class App{
    function __construct(){
      //get parameters
      $url = isset($_GET['url']) ? $_GET['url'] : '';
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      // var_dump($url);

      if(empty($url[0])){
        $selectController = 'controller/main.php';
        require_once $selectController;
        $controller = new Main();
        $controller->loader_model('main');
        return false;
      }

      //select controller
      $selectController = 'controller/' . $url[0] . '.php';
      if(file_exists($selectController)){
        require_once $selectController;
        $controller = new $url[0];
        $controller->loader_model($url[0]);

        if(isset($url[1])){
          $controller->{$url[1]}();
        }

      }else{
        $controller = new Errors();
      }
    }
  }
?>
