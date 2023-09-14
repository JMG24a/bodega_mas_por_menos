<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Location" content="http://localhost:8080/">
  <link rel='stylesheet' href="<?php echo constant('URL');?>public/css/home/index.css">
  <script src="<?php echo constant('URL');?>public/js/storages.js"></script>
  <script src="<?php echo constant('URL');?>public/js/ajax.js"></script>
  <title>Bodega Comunitaria</title>
</head>
<body>
  <section class="dashBoard-container">
    <?php require 'view/components/tool_bar.php'; ?>
    <?php require 'view/components/menu.php'; ?>
    <div class="dashBoard-card">
      <section class="dashBoard">
        <div class="dashBoard-invoice">
          <div style="display: none;" id='request'>home/get_products</div>
          <table>
            <tr>
              <td>imagen</td>
              <td>Producto</td>
              <td>precio</td>
              <td>cantidad</td>
              <td>acumulado</td>
              <td>eliminar</td>
            </tr>
            <tr>
              <td>
                  <img src="<?php echo constant('URL');?>public/img/azucar.png" width='40px' height='40px' alt="">
              </td>
              <td>Azucar</td>
              <td>1.5$</td>
              <td>4</td>
              <td>7$</td>
              <td>X</td>
            </tr>
            <tr>
              <td>
                <img src="<?php echo constant('URL');?>public/img/harina.jpeg" width='40px' height='40px' alt="">
              </td>
              <td>Harina</td>
              <td>1.5$</td>
              <td>4</td>
              <td>7$</td>
              <td>X</td>
            </tr>
            <tr>
              <td>
                <img src="<?php echo constant('URL');?>public/img/arroz.jpeg" width='40px' height='40px' alt="">
              </td>
              <td>Arroz</td>
              <td>1.5$</td>
              <td>4</td>
              <td>7$</td>
              <td>X</td>
            </tr>
          </table>
          <div>
            <p>Total: 8.7$</p>
          </div>
        </div>
      </section>
      <section class="container-items">
        <?php require 'view/components/products.php'; ?>
      </section>
    </div>
  </section>
  <script src="<?php echo constant('URL');?>public/js/validations.js"></script>
</body>
</html>
