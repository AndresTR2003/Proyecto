<?php

include "conexion.php";

$id=$_GET["id"];

$sql=$conexion->query(" SELECT * FROM proveedor WHERE id_proveedor=$id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  
<form class="col-4 P-3 m-auto" method="POST">
            <h3 class="text-center text-secundary">MODIFICAR DATOS</h3>
            <input type="hidden" name="id" value="<?= $_GET["id"]?>">
            <?php
             include "editar.php";

             while($datos = $sql->fetch_object()) { ?>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No.Id</label>
    <input type="text" class="form-control" name="id" value="<?= $datos->id_proveedor?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="tex" class="form-control" name="nombre" value="<?= $datos->nombre?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido" value="<?= $datos->apellido?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Celular</label>
    <input type="text" class="form-control" name="celular" value="<?= $datos->celular?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="text" class="form-control" name="correo" value="<?= $datos->correo?>">

    <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
</form>
  </div>
    
  
  <?php }  
    ?>
  
</form>

</body>
</html>