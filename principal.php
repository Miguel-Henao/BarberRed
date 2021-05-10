<?php 

	require "conexion.php";

	$consulta = "SELECT * FROM cortes";
	$respuesta = mysqli_query($conn, $consulta);

	while ($fila = $respuesta->fetch_array()) {
		echo $fila['titulo'];	
	}

 ?>