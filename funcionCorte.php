<?php 

	function mostrarCortes(){
		require 'conexion.php';

	$estado = "true";

	$consulta = "SELECT * FROM cortes";
	$respuesta = mysqli_query($conn, $consulta);
	if (!isset($respuesta)) {
		echo "<h2>No se encontraron cortes</h2>";
	}else{

		while ($fila = $respuesta->fetch_array()) {
				
			echo "<h2>".$fila['titulo']."</h2>";

			$consulta2 = "SELECT * FROM imgcortes  WHERE idcortes2 = ".$fila['idcortes']."";
			$respuesta2 = mysqli_query($conn, $consulta2);
			if (!isset($respuesta2)) {
				
			}else{
				while ($fila2 = $respuesta2->fetch_array()) {
					echo  "<img width=\"200\" src=\"uploads/".$fila2['url']."\" title=\"".$fila2['titulo']."\">";
					

				}
			}
			
			$consulta3 = "SELECT * FROM barberia WHERE idbarberia = ".$fila['idbarberia1']."";
			$respuesta3 = mysqli_query($conn, $consulta3);
			
			
			}

			

		}
	}



 ?>