<?php 


include ("conexion.php");


$codigo = $_POST['codigo_uni'];
$nombre = $_POST['nombres_uni'];
$numAni= $_POST['numani_uni'];
$desc = $_POST['desc_uni'];
$area = $_POST['area_uni'];

$con = new conexion;

$query = "INSERT INTO unidad(codigo, nombre, numAnimales, descripcion, codArea) VALUES ('$codigo','$nombre','$numAni','$desc','$area')";

$verificar_nombre = $con->consulta("SELECT codigo FROM unidad WHERE codigo= '$codigo'");

	
	if(mysqli_num_rows($verificar_nombre)> 0){

		echo '<script>alert("La unidad ya esta registrada");
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

		echo '<script>alert("Unidad registrada exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>