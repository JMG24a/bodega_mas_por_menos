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
        // elementos del arreglo - parametros de la url
        $params = sizeof($url);
        if($params > 1){
          if($params > 2){
            $param = [];
            for($i = 2; $i < $params; $i++){
              array_push($param, $url[$i]);
            }
            $controller->{$url[1]}($param);
          }else{
            $controller->{$url[1]}();
          }
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
