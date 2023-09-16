<?php
  class App{
    function __construct(){
      //get parameters
      $url = isset($_GET['url']) ? $_GET['url'] : '';
      $url = rtrim($url, '/');
      $url = explode('/', $url);
      // var_dump($url);

      if(empty($url[0])){
        $selectController = 'controller/auth.php';
        require_once $selectController;
        $controller = new Auth();
        $controller->loader_model('auth');
        $controller->render();
        return false;
      }

      //select controller
      $selectController = 'controller/' . $url[0] . '.php';
      if(file_exists($selectController)){
        require_once $selectController;
        $controller = new $url[0];
        $controller->loader_model($url[0]);

        $params = sizeof($url);

        if(isset($url[1])){
          $controller->{$url[1]}();
        }else{
          $controller->render();
        }

      }else{
        $controller = new Errors();
        $controller->render();
      }
    }
  }
?>
