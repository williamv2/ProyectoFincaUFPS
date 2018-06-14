<?php 


include ("conexion.php");

$numero = $_POST['num_vis'];
$fecha = $_POST['mfechaing_visi'];
$placa = $_POST['mplaca_visi'];
$inst = $_POST['minst_visi'];
$motivo = $_POST['mmotivo_visi'];

$fechaing = date('Y-m-d', strtotime($fecha));
$con = new conexion;

$query = "UPDATE visitante SET fechaIngreso='$fechaing', motivo='$motivo',placa='$placa',institucion='$inst' WHERE numero ='$numero'";

//Ejecutar Consulta
$resultado = $con->consulta($query);


	if(!$resultado){

		echo '<script>alert("Error al Modificar");
		window.history.go(-1);
		</script>';
	}
	else{

		echo '<script>alert("Visita modificada exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>