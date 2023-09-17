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
      <section class="container-items">
      <form
        action="<?php echo constant('URL');?>/employees/edit_save"
        method="POST"
        class="container-form"
      >
        <label for="">Nombre</label>
        <input
          type="text"
          name="name"
          id="name"
          placeholder= <?php echo $this->edit['name'] ?? ""?>
          required
        >
        <label for="">Apellido</label>
        <input
          type="text"
          name="lastname"
          id="lastname"
          placeholder= <?php echo $this->edit['lastname'] ?? ""?>
          required
        >
        <label for="">Cedula</label>
        <input
          type="text"
          name="dni"
          id="dni"
          placeholder= <?php echo $this->edit['dni'] ?? ""?>
          required
        >
        <label for="">Email</label>
        <input
          type="text"
          name="email"
          id="email"
          placeholder= <?php echo $this->edit['email'] ?? ""?>
          required
        >
        <label for="">Edad</label>
        <input
          type="text"
          name="age"
          id="age"
          placeholder= <?php echo $this->edit['age'] ?? ""?>
          required
        >
        <label for="">Cargo</label>
        <input
          type="text"
          name="role"
          id="role"
          placeholder= <?php echo $this->edit['role'] ?? ""?>
          required
        >
        <label for="">Telefono</label>
        <input
          type="text"
          name="phone"
          id="phone"
          placeholder= <?php echo $this->edit['phone'] ?? "" ?>
          required
        >
        <label for="">Direccion</label>
        <input
          type="text"
          name="address"
          id="address"
          placeholder= <?php echo $this->edit['address'] ?? ""?>
          required
        >
        <label for="">Referencia</label>
        <input
          type="text"
          name="reference"
          id="reference"
          placeholder= <?php echo $this->edit['reference'] ?? ""?>
          required
        >
        <label for="">estado</label>
        <input
          type="text"
          name="state"
          id="state"
          placeholder= <?php echo $this->edit['state'] ?? ""?>
          required
        >
        <label for="">Ciudad</label>
        <input
          type="text"
          name="city"
          id="city"
          placeholder= <?php echo $this->edit['city'] ?? ""?>
          required
        >
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Contraceña"
          required
        >
        <p id="error_password"></p>
        <button id="submit_user">guardar</button>
        <button id="submit_user">cancelar</button>
      </form>
      </section>
    </div>
  </section>
</body>
</html>
