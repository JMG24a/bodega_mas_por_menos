<?php
  // variables de entorno de la app
  require_once 'config/index.php';
  //modelos para el almacenamiento
  require_once 'model/employee.php';
  require_once 'model/product.php';
  require_once 'model/db.php';
  // Dependencias de la app
  require_once 'lib/controller.php';
  require_once 'lib/model.php';
  require_once 'lib/view.php';
  require_once 'lib/app.php';
  //controller notfount
  require_once 'controller/error.php';
  // Punto de arranque de la app
  $app = new App();
?>
