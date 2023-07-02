<?
include('conexion.php');

$id=$_POST["id"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"]; 
$celular=$_POST["celular"];
$correo=$_POST["correo"];

if(isset($_POST['generar_reporte']))
{
	// NOMBRE DEL ARCHIVO Y CHARSET
	header('Content-Type:text/csv; charset=latin1');
	header('Content-Disposition: attachment; filename="reporte.csv"');

	// SALIDA DEL ARCHIVO
	$salida=fopen('php://output', 'w');
	// ENCABEZADOS
	fputcsv($salida, array('id_proveedor', 'nombre', 'apellido', 'celular', 'correo'));
	// QUERY PARA CREAR EL REPORTE
	$sql=$conexion->query("INSERT INTO proveedor WHERE id BETWEEN $id"); 
		fputcsv($salida, array($filaR['id'], 
								$filaR['nombre'],
								$filaR['apellido'],
								$filaR['celular'],
								$filaR['correo']));

}

?>