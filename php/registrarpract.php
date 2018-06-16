<?php 


include ("conexion.php");


$dni = $_POST['dni_persona_pract'];
$proyecto = $_POST['numero_proyecto'];
$fecha1 = $_POST['fechaini_pract'];
$fecha2 = $_POST['fechafin_pract'];
$semestre = $_POST['sem_pract'];
$inst = $_POST['inst_pract'];

$fechaini = date('Y-m-d', strtotime($fecha1));
$fechafin = date('Y-m-d', strtotime($fecha2));
$con = new conexion;

$query = "INSERT INTO practicante(fechaInicio, fechaFinal, dni, numeroProyecto, semestre, institucion) VALUES ('$fechaini','$fechafin','$dni','$proyecto','$semestre','$inst')";

$verificar_persona = $con->consulta("SELECT dni FROM practicante WHERE dni= '$dni'");

	
	if(mysqli_num_rows($verificar_persona)> 0){

		echo '<script>alert("la persona ya tiene proyecto");
		window.history.go(-1);
		</script>';
		exit;
	}

$verificar_visitante = $con->consulta("SELECT dni FROM visitante WHERE dni= '$dni'");	

	if(mysqli_num_rows($verificar_visitante)> 0){

		echo '<script>alert("la persona esta como visitante");
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

		echo '<script>alert("Practicante registrado exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>