<?php 

	require "conexion.php";
	require "php/cabecera.php";
 ?>
<main class="principal">
<?php 
	$consulta = "SELECT * FROM cortes";
	$respuesta = mysqli_query($conn, $consulta);
	while ($fila = $respuesta->fetch_array()) {

	$_SESSION['idcortesC4'] = $fila['idcortes'];
	$_SESSION['idpagina4C4'] = $fila['idpagina4'];
	$_SESSION['tituloC4'] = $fila['titulo'];
	$_SESSION['descripcionC4'] = $fila['descripcion'];
	$_SESSION['precioC4'] = $fila['precio'];




			

		$consulta2 = "SELECT * FROM imgcortes  WHERE idcortes2 = ".$_SESSION['idcortesC4']." LIMIT 1";
		$respuesta2 = mysqli_query($conn, $consulta2);
		while ($fila2 = $respuesta2->fetch_array()) {

					$_SESSION['idcortes2IM6'] = $fila2['idcortes2'];
					$_SESSION['tituloIM6'] = $fila2['titulo'];
					$_SESSION['descripcionIM6'] = $fila2['descripcion'];
					$_SESSION['urlIM6'] = $fila2['url'];
				}

			
			if (isset($_SESSION['idcortes2IM6'])) {
				echo "<h2>".$_SESSION['tituloC4']."</h2>";
				echo "<p>".$_SESSION['descripcionC4']."</p>";
				echo "<p>".$_SESSION['precioC4']."</p>";
				
				echo "<p>".$fila3['nombre']."</p>";
				echo "<a href=\"corte.php?c=".$fila['idcortes']."\">Ver</a>";

				echo  "<img width=\"200\" src=\"uploads/".$_SESSION['urlIM6']."\" title=\"".$_SESSION['tituloIM6']."\">";
				echo "<h2>No se encontraron cortes</h2>";
				echo "<div style=\"background-color: rgba(0,0,0,0.4); padding: 10px 20px; color: #ffffff\">";
				
			}

				
				

				
			
}
			echo "</div>";

		


 ?>
</main>