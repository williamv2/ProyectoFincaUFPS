<?php 


include ("conexion.php");

$codigo = $_POST['cod_uni'];
$nombre = $_POST['mnombres_uni'];
$numani = $_POST['mnumani_uni'];
$desc = $_POST['mdesc_uni'];
$area = $_POST['marea_uni'];


$con = new conexion;

$query = "UPDATE unidad SET nombre='$nombre',numAnimales='$numani',descripcion='$desc',codArea='$area' WHERE codigo ='$codigo'";

//Ejecutar Consulta
$resultado = $con->consulta($query);


	if(!$resultado){

		echo '<script>alert("Error al Modificar");
		window.history.go(-1);
		</script>';
	}
	else{

		echo '<script>alert("Unidad modificada exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>