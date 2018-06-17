<?php 


include ("conexion.php");


$nombre = $_POST['nombres_ani'];
$desc = $_POST['desc_ani'];
$fecha1 = $_POST['fechaing_ani'];
$unidad = $_POST['uni_ani'];
$genero = $_POST['genero_ani'];
$tamano = $_POST['tam_ani'];
$especie = $_POST['esp_ani'];
$cantali = $_POST['ali_ani'];

$fechaing = date('Y-m-d', strtotime($fecha1));

$con = new conexion;

$query = "INSERT INTO animal(nombre, descripcion, fechaIngreso, codUnidad, genero, tamano, especie, cantidadelimento) VALUES ('$nombre','$desc','$fechaing','$fechater','$unidad','$genero','$tamano','$especie','$cantali')";

/*
$verificar_nombre = $con->consulta("SELECT codigo FROM unidad WHERE codigo= '$codigo'");

	
	if(mysqli_num_rows($verificar_nombre)> 0){

		echo '<script>alert("La unidad ya esta registrada");
		window.history.go(-1);
		</script>';
		exit;
	}
*/
//Ejecutar Consulta
$resultado = $con->consulta($query);


	if(!$resultado){

		echo '<script>alert("Error al registrase");
		window.history.go(-1);
		</script>';
	}
	else{

		echo '<script>alert("Animal registrado exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>