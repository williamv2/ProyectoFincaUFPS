<?php 


include ("conexion.php");


$dni = $_POST['dni_persona'];
$fecha = $_POST['fecha_visi'];
$motivo = $_POST['motivo_visi'];
$placa = $_POST['placa_visi'];
$inst = $_POST['inst_visi'];

$fechaing = date('Y-m-d', strtotime($fecha));
$con = new conexion;

$query = "INSERT INTO visitante( fechaIngreso, motivo, placa, dni, institucion) VALUES ('$fechaing','$motivo','$placa','$dni','$inst')";

$verificar_nombre = $con->consulta("SELECT dni FROM practicante WHERE dni= '$dni'");

	
	if(mysqli_num_rows($verificar_nombre)> 0){

		echo '<script>alert("la persona ya esta como practicante");
		window.history.go(-1);
		</script>';
		exit;
	}

//Ejecutar Consulta
$resultado = $con->consulta($query);


	if(!$resultado){

		echo '<script>alert("Error al registrase");
		window.history.go(-1);
		</script>';
	}
	else{

		echo '<script>alert("Visita registrada exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>