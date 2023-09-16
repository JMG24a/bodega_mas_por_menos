<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Location" content="http://localhost:8080/">
  <link rel='stylesheet' href="<?php echo constant('URL');?>public/css/home/index.css">
  <script src="<?php echo constant('URL');?>public/js/ajax.js"></script>
  <title>Bodega Comunitaria</title>
</head>
<body>
  <section class="dashBoard-container">
    <?php require 'view/components/tool_bar.php'; ?>
    <?php require 'view/components/menu.php'; ?>
    <div class="dashBoard-card">
      <section class="dashBoard">
        <div style="display: none;" id='request'>home/get_products</div>
        <div style="display: flex; flex-direction: column; text-align: center; color: white; align-items: center;">
          <p>Almacen aqui podras agregar y modificar todos los productos que decees</p>
          <button style="width: 230px; margin: 5px; border-radius: 5px; cursor: pointer;">
            Agregar nuevo articulo
          </button>
        </div>
      </section>
      <section class="container-items">
        <?php require 'view/components/products.php'; ?>
      </section>
    </div>
  </section>
</body>
</html>
