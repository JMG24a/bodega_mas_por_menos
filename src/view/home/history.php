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
      <?php require 'view/components/tool_bar.php'; ?>
      <?php require 'view/components/menu.php'; ?>

      <div class="dashBoard-card">
        <div class="dashBoard-invoice">
        <table>
            <tr>
              <td>fecha</td>
              <td>cliente</td>
              <td>telefono</td>
              <td>total</td>
              <td>consultar</td>
            </tr>
            <tr>
              <td>15/06/2000</td>
              <td>CI 27436188</td>
              <td>0427436188</td>
              <td>30</td>
              <td>ver</td>
            </tr>
            <tr>
              <td>17/08/2000</td>
              <td>CI: 30376939</td>
              <td>0427436188</td>
              <td>300.00</td>
              <td>ver</td>
            </tr>
            <tr>
              <td>17/08/2000</td>
              <td>CI: 27025999$</td>
              <td>0427436188</td>
              <td>300.000</td>
              <td>ver</td>
            </tr>
          </table>
        </section>
      </div>
  </body>
</html>
