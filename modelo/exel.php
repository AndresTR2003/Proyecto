<?php
header("Connet-Type: application/xls");
header("content-Disposition: attachment; filename=archivo.xls");
?>
	
	<table class="table">
  <thead class="bg-info">
    <tr>
      <th scope="col">No.Doc</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Celular</th>
      <th scope="col">Correo</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "conexion.php";
    $sql=$conexion->query(" SELECT * FROM proveedor");
    while($datos = $sql->fetch_object()) { ?>
  <tr>
      <th><?= $datos->id_proveedor?></th>
      <td><?= $datos->nombre?></th>
      <td><?= $datos->apellido?></th>
      <td><?= $datos->celular?></th>
      <td><?= $datos->correo?></th>
	  <?php }
    ?>
	</table>