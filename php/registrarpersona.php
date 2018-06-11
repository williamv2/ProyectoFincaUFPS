<?php 


include ("conexion.php");


$dni = $_POST['dni_per'];
$nombre = $_POST['nombre_per'];
$apellido = $_POST['apellido_per'];

$con = new conexion;

$query = "INSERT INTO persona(dni,nombres, apellidos) VALUES ('$dni','$nombre','$apellido')";

$verificar_nombre = $con->consulta("SELECT dni FROM persona WHERE dni= '$dni'");

	
	if(mysqli_num_rows($verificar_nombre)> 0){

		echo '<script>alert("la persona ya esta registrada");
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

		echo '<script>alert("Persona registrada exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>