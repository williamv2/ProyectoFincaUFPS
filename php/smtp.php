<?php
 
include ('conexion.php');

$correo = $_POST['email'];

$con = new conexion;

$query = "SELECT * FROM admin WHERE email ='$correo'";

$resultado = $con->consulta($query);
$number = $con->contador($query);

if (!$resultado || $number == 0) {
 	
 	echo '<script>alert("La direccion de correo no se encuentra registrada");
		window.history.go(-1);
		</script>';
 } 
 else {
 	
 	while ($row = $resultado->fetch_assoc()) {
 		$usuario = $row['usuario'];
 		$password = $row['password'];
 	}

 	$mensaje= "Usuario: ".$usuario." Contraseña: ".$password;

	echo "<script>alert('".$mensaje."');
		window.history.go(-1);
		</script>";


 }
?>