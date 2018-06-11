<?php 
	
	//Incluir archivo de la conexion
	include('conexion1.php');
	
	//Asignamos la funcion de conexion a una variable

	$con = conexion();

	$consulta ="SELECT v.numero, v.fechaIngreso, v.motivo, v.placa, p.nombres, p.apellidos, v.institucion FROM visitante v INNER JOIN persona p ON p.dni=v.dni ORDER BY numero";

	//Realizamos la consulta SQL para recuperar todos los registros de la tabla

	$resultado= $con->query($consulta);

	//Creamos una variable tipo array la cual almacenamos todos los registros

	$datos = array();

	//Iteramos todos los registros devueltos y llenamos el array

	while ($row = $resultado->fetch_assoc()) {
		
		$datos[] = $row;
	}

	//Convertimos el array al formato json y mostramos para que el angular JS pueda formatear la informacion

	echo json_encode($datos);

?>














 ?>