<?php 


include ("conexion.php");

$numero = $_POST['num_pract'];
$fecha1 = $_POST['mfechaini_pract'];
$fecha2 = $_POST['mfechafin_pract'];
$semestre = $_POST['msem_pract'];
$inst = $_POST['minst_pract'];


$fechaini = date('Y-m-d', strtotime($fecha1));
$fechafin = date('Y-m-d', strtotime($fecha2));
$con = new conexion;

$query = "UPDATE practicante SET fechaInicio='$fechaini',fechaFinal='$fechafin',semestre='$semestre',institucion='$inst' WHERE numero='$numero'";

//Ejecutar Consulta
$resultado = $con->consulta($query);


	if(!$resultado){

		echo '<script>alert("Error al Modificar");
		window.history.go(-1);
		</script>';
	}
	else{

		echo '<script>alert("Practicante modificado exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>