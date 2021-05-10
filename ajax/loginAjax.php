<?php 

	require "../conexion.php";

 ?>
<?php 

	$peticionLogin1 = "SELECT * FROM usuario WHERE movil =".$_POST['movil1']." AND password = ".$_POST['pass1']." LIMIT 1";
	$respuestaLogin1 = mysqli_query($conn, $peticionLogin1);
	while ($filaLogin1 = $respuestaLogin1->fetch_array()) {

		$_SESSION['idusuarioL1'] = $filaLogin1['idusuario'];
		$_SESSION['idpagina3L1'] = $filaLogin1['idpagina3'];
		$_SESSION['idrolusuario1L1'] = $filaLogin1['idrolusuario1'];
		$_SESSION['idregistrocorte1L1'] = $filaLogin1['idregistrocorte1'];
		$_SESSION['movil1'] = $filaLogin1['movil'];
		$_SESSION['nombreL1'] = $filaLogin1['nombre'];
		$_SESSION['generoL1'] = $filaLogin1['genero'];
		$_SESSION['direccionL1'] = $filaLogin1['direccion'];
		$_SESSION['ciudadL1'] = $filaLogin1['ciudad'];
		$_SESSION['passwordL1'] = $filaLogin1['password'];

		if (isset($filaLogin1['movil'])) {
			echo 1;
		}else{
			echo 0;
		}


		$peticionLogin2 = "SELECT * FROM rolusuario WHERE idrolusuario =".$filaLogin1['idrolusuario1']." LIMIT 1";
		$respuestaLogin2 = mysqli_query($conn, $peticionLogin2);
		while ($filaLogin2 = $respuestaLogin2->fetch_array()) {
		$_SESSION['idrolusuarioL2'] = $filaLogin2['idrolusuario'];
		$_SESSION['tituloL2'] = $filaLogin2['titulo'];
		$_SESSION['descripcionL2'] = $filaLogin2['descripcion'];
		}
	}
	



?>

