<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Location" content="http://localhost:8080/">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel='stylesheet' href="<?php echo constant('URL');?>public/css/auth/auth.css">
  <title>Bodega Comunitaria</title>
</head>
<body>
  <section class="register-container">

    <div class="register-card">

      <div class="register-card-header">
          <h1>Iniciar sesión</h1>
          <div>Por favor inicia sesión para usar la plataforma.</div>
      </div>

      <form
        action="<?php echo constant('URL');?>/auth/init_session"
        method="POST"
        class="container-form"
      >
        <div class="form-item">
          <span class="form-item-icon material-symbols-rounded">Person</span>
          <input type="text" name="email" id="email" placeholder="Usuario" required autofocus>
        </div>
        <p id="error_user"></p>

        <div class="form-item">
          <span class="form-item-icon material-symbols-rounded">lock</span>
          <input type="password" name="password" id="password" placeholder="Contraseña" required>
        </div>
        <p id="error_password"></p>

        <?php
          if(strlen ( $this->error ) > 1)
          echo('<p class="error">' . $this->error . '</p>')
        ?>
        <button id="submit_user">Entrar</button>
      </form>

      <div class="register-card-footer">
        Ya tienes una cuenta? <a href="#">Crear una cuenta gratis</a>.
      </div>

    </div>
  </section>
  <script src="<?php echo constant('URL');?>public/js/validation.js"></script>
  <script src="<?php echo constant('URL');?>public/js/storage.js"></script>
</body>
</html>
