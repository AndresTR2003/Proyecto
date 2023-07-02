<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta http-equiv="X-UA-compatible"content="IE=edge">
        <meta name="viewport" content="width=device-widh, initial-acale=1.0">
        <title>REGISTRO DE PROVEEDOR</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/2fa4e418fa.js" crossorigin="anonymous"></script>
    </head>
    <body>
      <script>
        function eliminar(){
          var respuesta=confirm("¿Estas seguro de eliminar este usuario`?");
          return respuesta
        }
      </script>
        <h1 class="text-center p-3">REGISTRO DE PROVEEDOR</h1>
        <?php
        include "conexion.php ";
        include "eliminar.php";
        ?>
<div class="container-fluid row">
<form class="col-4 P-3" method="POST">
            <h3 class="text-center text-secundary">REGISTRO</h3>
            <?php
            include "registro.php";
           
            ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">No.Id</label>
    <input type="text" class="form-control" name="id">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="tex" class="form-control" name="nombre">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Apellido</label>
    <input type="text" class="form-control" name="apellido">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Celular</label>
    <input type="text" class="form-control" name="celular">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="text" class="form-control" name="correo">
  </div>
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
</form>

<div class="col-8 p-4">
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
      <td>
        <a href="modificar.php?id=<?= $datos->id_proveedor?>" class="btn btn -small btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
        <a onclick="return eliminar()" href="./index.php?id=<?= $datos->id_proveedor?>" class="btn btn -small btn-danger"><i class="fa-solid fa-delete-left"></i></a>
        <a href="exel.php?<?= $datos->id_proveedor?>" class="btn btn -small btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
      </td>
    </tr>
    <?php }
    ?>

  </tbody>
</table>


</div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>