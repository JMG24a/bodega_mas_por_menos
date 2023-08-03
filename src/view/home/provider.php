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
      <?php require 'view/components/menu/tool_bar.php'; ?>
      <?php require 'view/components/menu/menu.php'; ?>

      <div class="dashBoard-card">
        <div class="dashBoard-invoice">
        <table>
            <tr>
              <td>fecha</td>
              <td>producto</td>
              <td>cantidad</td>
              <td>monto</td>
              <td>proveedor</td>
              <td>consultar</td>
            </tr>
            <tr>
              <td>15/06/2000</td>
              <td>azucar</td>
              <td>042</td>
              <td>30.00</td>
              <td>jose morales</td>
              <td>ver</td>
            </tr>
            <tr>
              <td>17/08/2000</td>
              <td>haina</td>
              <td>0427</td>
              <td>300.00</td>
              <td>palma gabi</td>
              <td>ver</td>
            </tr>
            <tr>
              <td>17/08/2000</td>
              <td>arroz</td>
              <td>04273</td>
              <td>300.000</td>
              <td>Leo montez</td>
              <td>ver</td>
            </tr>
          </table>
        </section>
      </div>
  </body>
</html>
