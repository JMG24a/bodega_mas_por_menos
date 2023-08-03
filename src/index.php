<?php
  // Conexion con la base de datos
  require_once 'db/index.php';
  // variables de entorno de la app
  require_once 'config/index.php';
  // Dependencia de los controllers
  require_once 'lib/controller.php';
  require_once 'lib/model.php';
  require_once 'lib/view.php';
  require_once 'lib/app.php';

  // Punto de arranque de la app
  $app = new App();
?>
