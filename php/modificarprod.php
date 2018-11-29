<?php 


include ("conexion.php");

$codigo = $_POST['cod_prod'];
$descrip = $_POST['mdesc_prod'];
$cantidad = $_POST['mcant_prod'];
$peso = $_POST['mpeso_prod'];
$fecha = $_POST['mfecha_prod'];
$numunidad = $_POST['muni_prod'];

$fecha1 = date('Y-m-d', strtotime($fecha));


$con = new conexion;

$query = "UPDATE produccion SET descripcion='$descrip',cantidad='$cantidad',peso='$peso',fecha='$fecha1',codUnidad='$numunidad' WHERE codigo='$codigo'";

//Ejecutar Consulta
$resultado = $con->consulta($query);


	if(!$resultado){

		echo '<script>alert("Error al Modificar");
		window.history.go(-1);
		</script>';
	}
	else{

		echo '<script>alert("Produccion modificada exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>