<?php 


include ("conexion.php");

$codigo = $_POST['cod_ani'];
$nombre = $_POST['mnombres_ani'];
$desc = $_POST['mdesc_ani'];
$fecha1 = $_POST['mfechaing_ani'];
$unidad = $_POST['muni_ani'];
$genero = $_POST['mgenero_ani'];
$tamano = $_POST['mtam_ani'];
$especie = $_POST['mesp_ani'];
$cantali = $_POST['mali_ani'];

$fechaing = date('Y-m-d', strtotime($fecha1));
$con = new conexion;

$query = "UPDATE animal SET nombre='$nombre',descripcion='$desc',fechaIngreso='$fechaing',codUnidad='$unidad',genero='$genero',tamano='$tamano',especie='$especie',cantidadelimento='$cantali' WHERE codigo ='$codigo'";

//Ejecutar Consulta
$resultado = $con->consulta($query);


	if(!$resultado){

		echo '<script>alert("Error al Modificar");
		window.history.go(-1);
		</script>';
	}
	else{

		echo '<script>alert("Animal modificado exitosamente")</script>';
		echo "<script>window.location='./dashboard.php';</script>";
		
	}

//cerrar conexion
	$con->cerrar();

?>