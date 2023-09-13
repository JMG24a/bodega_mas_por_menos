<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Location" content="http://localhost:8080/">
    <link rel='stylesheet' href="<?php echo constant('URL');?>public/css/home/index.css">
    <title>Bodega Comunitaria</title>
  </head>
  <body>
    <section class="dashBoard-container">
      <div class="tool-bar">
        <ul>
          <li><div class="picture"></div></li>
          <li>BODEGA COMUNITARIA +x-</li>
          <li>configuraciones</li>
        </ul>
      </div>
      <?php require 'view/components/menu/menu.php'; ?>

      <div class="dashBoard-card">
        <section class="dashBoard">
          <div class="dashBoard-invoice">

          </div>
        </section>
      </div>
  </body>
</html>
