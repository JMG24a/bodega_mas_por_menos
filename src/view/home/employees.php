<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Location" content="http://localhost:8080/">
  <link rel='stylesheet' href="<?php echo constant('URL');?>public/css/home/index.css">
  <script src="<?php echo constant('URL');?>public/js/listSomething.js" defer></script>
  <script src="<?php echo constant('URL');?>public/js/listEmployees.js" defer></script>
  <title>Bodega Comunitaria</title>
</head>
<body>
  <section class="dashBoard-container">
    <?php require 'view/components/tool_bar.php'; ?>
    <?php require 'view/components/menu.php'; ?>
    <div class="dashBoard-card">
      <section class="container-items">
        <div style="" id='request'>employees/get_employees</div>
        <?php require 'view/components/list_employee.php'; ?>
      </section>
    </div>
  </section>
</body>
</html>
