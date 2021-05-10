<?php  
require "conexion.php";
require "php/cabecera.php";
?>

<?php
	$peticionSalon = "SELECT * FROM usuario WHERE idpagina3 = ".$_GET['salon']."";
	$respuestaSalon = mysqli_query($conn, $peticionSalon);
	while ($filaSalon = $respuestaSalon->fetch_array()) {

		
		$_SESSION['nombreSA'] = $filaSalon['nombre'];
		$_SESSION['generoSA'] = $filaSalon['genero'];
		$_SESSION['movilSA'] = $filaSalon['movil'];
		$_SESSION['ciudadSA'] = $filaSalon['ciudad'];

		echo "<div>".$_SESSION['nombreSA']."</div>";
	}


?>

<?php 
	require 'php/footer.php';
 ?>
