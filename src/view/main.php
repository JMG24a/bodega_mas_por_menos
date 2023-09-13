<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Location" content="http://localhost:8080/">
  <link rel='stylesheet' href="<?php echo constant('URL');?>public/css/main/main.css">
  <title>Bodega Comunitaria</title>
</head>
<body>
  <section class="register-container">
    <div class="logo-register"></div>
    <div class="register-card">
      <h2>Iniciar</h2>
      <form
        action="<?php echo constant('URL');?>/main/init_session"
        method="POST"
        class="container-form"
      >
        <input
          type="text"
          name="cedula"
          id="cedula"
          placeholder="Usuario"
          required
        >
        <p id="error_user"></p>
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Contraceña"
          required
        >
        <p id="error_password"></p>
        <?php
          if(strlen ( $this->error ) > 1)
          echo('<p>' . $this->error . '</p>')
        ?>
        <button id="submit_user">Entrar</button>
      </form>
    </div>
  </section>
  <script src="<?php echo constant('URL');?>public/js/validations.js"></script>
  <script src="<?php echo constant('URL');?>public/js/storage.js"></script>
</body>
</html>
