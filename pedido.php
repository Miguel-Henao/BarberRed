<?php 
	require "conexion.php";
	require "php/cabecera.php";
	

 ?>


 	<?php

 	$_SESSION['corteP1']=$_GET['ped'];

 	$consulta = "SELECT * FROM cortes WHERE idcortes =".$_SESSION['corteP1']."";
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
			
			if(!isset($respuesta3)){

			}else{
				while( $fila3 = $respuesta3->fetch_array()){

				
					
				echo "<p>".$fila['descripcion']."</p>";
				echo "<p>".$fila['precio']."</p>";
				
				echo "<p>".$fila3['nombre']."</p>";

				?>
				<form action="pedir.php" method="post">
 					<div>

 						<label for="diac">Dia:</label>
 						<select name="diac" id="diac">
 						<?php 
 						
	$consultaCortes2 = "SELECT * FROM cortes WHERE idcortes =".$_SESSION['corteP1']."";
	$respuestaCortes2 = mysqli_query($conn, $consultaCortes2);

	if (!isset($respuestaCortes2)) {
		
	}else{
		while ($filaCortes2 = $respuestaCortes2->fetch_array()) {
			
	$consultaBarberia2 = "SELECT * FROM barberia WHERE idbarberia =".$filaCortes2['idbarberia1']."";
	$respuestaBarberia2 = mysqli_query($conn, $consultaBarberia2);
	if (!isset($respuestaBarberia2)) {
		
	}else{
		while ($filaBarberia2 = $respuestaBarberia2->fetch_array()) {
		
		
	$consultaFecha = "SELECT * FROM horarios WHERE codigohorario = ".$filaBarberia2['codigohorario1']." AND estado = 'true' ORDER BY fecha ASC, hora ASC";
	$respuestaFecha = mysqli_query($conn, $consultaFecha);
	
	if (!isset($respuestaFecha)) {
		echo "<option value=\"\">Ninguna</option>";

	}else{
		while($filaFecha = $respuestaFecha->fetch_array()){
			echo "<option value=\"".$filaFecha['fecha']."\">".$filaFecha['fecha']."</option>";
		}
				
					}
				}

			}		
		
	}
	}


 			  			?>

 					</select>
 					</div>

 					<div>
 						<label for="horac">hora</label>
 						<select name="horac" id="horac">
 						<?php 
 						
	$consultaCortes2 = "SELECT * FROM cortes WHERE idcortes =".$_GET['ped']."";
	$respuestaCortes2 = mysqli_query($conn, $consultaCortes2);

	if (!isset($respuestaCortes2)) {
		
	}else{
		while ($filaCortes2 = $respuestaCortes2->fetch_array()) {
			
	$consultaBarberia2 = "SELECT * FROM barberia WHERE idbarberia =".$filaCortes2['idbarberia1']."";
	$respuestaBarberia2 = mysqli_query($conn, $consultaBarberia2);
	if (!isset($respuestaBarberia2)) {
		
	}else{
		while ($filaBarberia2 = $respuestaBarberia2->fetch_array()) {
		
		
	$consultaFecha = "SELECT * FROM horarios WHERE codigohorario = ".$filaBarberia2['codigohorario1']." AND estado = 'true' ORDER BY fecha ASC, hora ASC";
	$respuestaFecha = mysqli_query($conn, $consultaFecha);
	
	if (!isset($respuestaFecha)) {
		echo "<option value=\"\">Ninguna</option>";

	}else{
		while($filaFecha = $respuestaFecha->fetch_array()){
			echo "<option value=\"".$filaFecha['hora']."\">".$filaFecha['hora']."</option>";
		}
				
					}
				}

			}		
		
	}
	}


 			  			?>

 					</select>
 					</div>
 					 <div>
 					 	<input type="submit" value="Pedir">
 					 </div>
 				</form>

				<?php 
				
						
				}

			}

			

		}
	}
	

?>
 	
 	
<?php 
	require 'php/footer.php';
 ?>