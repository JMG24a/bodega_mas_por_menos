<link rel="stylesheet" href="<?php echo constant('URL');?>public/css/home/index.css">
<div class="tool-bar">
  <div style="display: none;" id="token"><?php echo($this->employee['name'])?></div>
  <ul>
    <li>
      <div style="display: flex; align-items: center; width: 150px; justify-content: space-between;">
        <div class="picture"></div>
        <?php echo('<p>' . $this->employee['name'] . '</p>')?>
      </div>
    </li>
    <li>BODEGA COMUNITARIA + x -</li>
    <li><a style="color: white;" href="<?php echo constant('URL');?>/settign">configuraciones</a></li>
  </ul>
</div>
