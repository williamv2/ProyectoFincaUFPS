<?php 


include ("conexion.php");


$numero = $_POST['num_pro'];
$nombre = $_POST['nombre_pro'];
$descrip = $_POST['desc_pro'];
$numunidad = $_POST['num_unidad'];

$con = new conexion;

$query = "INSERT INTO proyecto(numero, descripcion, nombre, numeroUnidad) VALUES ('$numero','$descrip','$nombre','$numunidad')";

$verificar_numero = $con->consulta("SELECT numero FROM proyecto WHERE numero= '$numero'");

	
	if(mysqli_num_rows($verificar_numero)> 0){

		echo '<script>alert("el proyecto ya esta registrado");
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

		echo '<script>alert("Proyecto registrado exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>