<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Location" content="http://localhost:8080/">
  <link rel='stylesheet' href="<?php echo constant('URL');?>public/css/main/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />
  <title>Bodega Comunitaria</title>
</head>
<body>
  <section class="register-container">

    <div class="register-card">

      <div class="logo-register"></div>

      <div class="login-card-header">
          <h1>Sign In</h1>
          <div>Plase login to use platform</div>
      </div>

      <form
        action="<?php echo constant('URL');?>/main/init_session"
        method="POST"
        class="container-form"
      >
        <div class="form-item">
          <span class="form-item-icon material-symbols-rounded">Cedula</span>
          <input type="text" name="cedula" id="cedula" placeholder="Usuario" required autofocus>
        </div>
        <p id="error_user"></p>

        <div class="form-item">
          <span class="form-item-icon material-symbols-rounded">lock</span>
          <input type="password" name="password" id="password" placeholder="Contraceña" required>
        </div>
        <p id="error_password"></p>

        <div class="form-item-other">
          <div class="checkbox">
            <input type="checkbox" id="RememberMeCheckbox">
            <label for="RememberMeCheckbox">Remember Me</label>
          </div>
        </div>

        <?php
          if(strlen ( $this->error ) > 1)
          echo('<p>' . $this->error . '</p>')
        ?>
        <button id="submit_user">Entrar</button>
      </form>

      <div class="login-card-footer">
        Ya tienes una cuenta? <a href="#">Crear una cuenta gratis</a>.
      </div>

    </div>
  </section>
  <script src="<?php echo constant('URL');?>public/js/validations.js"></script>
  <script src="<?php echo constant('URL');?>public/js/storage.js"></script>
</body>
</html>
