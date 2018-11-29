<?php 


include ("conexion.php");


$codigo = $_POST['codigo_prod'];
$descrip = $_POST['desc_prod'];
$cantidad = $_POST['cant_prod'];
$peso = $_POST['peso_prod'];
$fecha = $_POST['fecha_prod'];
$numunidad = $_POST['uni_prod'];

$fecha1 = date('Y-m-d', strtotime($fecha));

$con = new conexion;

$query = "INSERT INTO produccion(codigo, descripcion, cantidad, peso, fecha, codUnidad) VALUES ('$codigo','$descrip','$cantidad','$peso','$fecha1','$numunidad')";

$verificar_numero = $con->consulta("SELECT codigo FROM produccion WHERE codigo= '$codigo'");

	
	if(mysqli_num_rows($verificar_numero)> 0){

		echo '<script>alert("la produccion ya esta registrada");
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

		echo '<script>alert("Produccion registrada exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>