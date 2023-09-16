<link rel="stylesheet" href="<?php echo constant('URL');?>public/css/home/home.css">
<div class="menu-container">
  <ul>
    <li>
      <a href="<?php echo constant('URL');?>/home">
        Ventas
      </a>
    </li>
    <li>
      <a href="<?php echo constant('URL');?>/history">
        Historial de ventas
      </a>
    </li>
    <li>
      <a href="<?php echo constant('URL');?>/customer">
        Clientes
      </a>
    </li>
    <?php
      if($this->employee['role'] === 'admin'){
        echo "
        <li>
          <a href='http://localhost:8080/provider'>
            Proveedores
          </a>
        </li>
        <li>
          <a href='http://localhost:8080/employees'>
            Empleados
          </a>
        </li>
        <li>
          <a href='http://localhost:8080/store'>
            Alamacen
          </a>
        </li>
        ";
      }
    ?>
  </ul>
</div>
