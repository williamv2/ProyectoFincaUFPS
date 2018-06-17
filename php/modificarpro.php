<?php 


include ("conexion.php");

$numero = $_POST['mnum_pro'];
$nombre = $_POST['mnombre_pro'];
$desc = $_POST['mdesc_pro'];
$unidad = $_POST['mnum_unidad'];


$con = new conexion;

$query = "UPDATE proyecto SET descripcion='$desc',nombre='$nombre', numeroUnidad='$unidad' WHERE numero ='$numero'";

//Ejecutar Consulta
$resultado = $con->consulta($query);


	if(!$resultado){

		echo '<script>alert("Error al Modificar");
		window.history.go(-1);
		</script>';
	}
	else{

		echo '<script>alert("Proyecto modificado exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>