<?php
///// INCLUIR LA CONEXIÓN A LA BD /////////////////
include('conexion.php');
///// CONSULTA A LA BASE DE DATOS /////////////////
$id="SELECT * FROM proveedor order by id";
$datos=$conexion->query($id);
?>

<html lang="es">
	<head>
		<title>Descargar Reportes en Excel desde la BD</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h2>Descargar Reportes en Excel desde la BD</h2>
			</div>
		</header>
		<section>			

    <?php
if (!empty($_GET["id"])) {
    $id=$_GET["id"]; }

    $sql=$conexion->query(" SELECT * FROM proveedor WHERE id=$id");
    { ?>
  
		<form method="post" class="form" action="reporte.php">

		<input type="text" name="id">

		<input type="submit" name="generar_reporte">
		</form>
		<?php }
    ?>
    
	</body>
</html>
	

