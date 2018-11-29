<?php 
 
include("./conexion.php");

header('Content-Type: application/json');

	$datos = array();

$consulta = "SELECT nombre,numAnimales FROM unidad";

$con = new conexion;

$resultado = $con->consulta($consulta);

while ($row = $resultado->fetch_assoc()) {
	
	$datos[] = $row;

}

echo json_encode($datos);
 ?>