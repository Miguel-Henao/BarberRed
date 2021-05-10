<?php 

	require "../conexion.php";

 ?>
	<!--<div style="padding: 10px">
	<div>
	<h2 style="text-align: center;">Cortes</h2>
	</div>-->
<?php
	
	
	

	
			$consultaRCorte = "SELECT * FROM registrocorte WHERE idusuario8 =".$_SESSION['idusuarioL1']."";
			$respuestaRCorte = mysqli_query($conn, $consultaRCorte);
			while ($filaRCorte = $respuestaRCorte->fetch_array()) {
				

				$consulta = "SELECT * FROM cortes WHERE idregistrocorte8 = ".$filaRCorte['idregistrocorte']."";
				$respuesta = mysqli_query($conn, $consulta);
				while ($fila = $respuesta->fetch_array()) {
					$_SESSION['idcortesMG10'] = $fila['idcortes'];
					echo "<a style=\"color:white;\" href=\"subircortes.php?cort=".$fila['idcortes']."\">";
					echo "<div style=\"display: inline-block; padding:5px;\">";
					echo "<div style=\" padding:20px; width:200px; background:rgba(100,0,0,0.5)\">";
					echo "<h2 style=\"text-aling:center;\">".$fila['titulo']."</h2>";
			
					$consulta2 = "SELECT * FROM imgcortes  WHERE idcortes2 = ".$fila['idcortes']." LIMIT 1";
					$respuesta2 = mysqli_query($conn, $consulta2);
				
					while ($fila2 = $respuesta2->fetch_array()) {
					$_SESSION['idimgcortesIM10'] = $fila2['idimgcortes'];
					$_SESSION['idcortes2IM10'] = $fila2['idimgcortes'];
					if (!isset($fila2['idimgcortes'])) {

						
					}else {
						echo "<div style:\"margin: auto;  wigth:auto; height:auto;\">";
						echo  "<img style=\"display:block; margin:auto; padding: 10px; border-radius:60%; height:100px;  width:100px;\"  src=\"uploads/".$fila2['url']."\" title=\"".$fila2['titulo']."\">";
						echo "</div>";
						
						
				}
				
				}

				
				echo "<div style=\"padding: 5px;\">";
				//echo "";
				echo "</div>";
				echo "<p>$".$fila['precio']."</p>";
				
				$consulta15 = "SELECT * FROM imgperfilu WHERE idusuario3 = ".$_SESSION['idusuarioL1']." ";
				$respuesta15 = mysqli_query($conn,$consulta15);
				while ($fila15 = $respuesta15->fetch_array() ) {
					echo "<div><img width=\"40\" heigth=\"40\" style=\"border-radius:60%;\" src=\"uploads/".$fila15['url']."\">".$_SESSION['nombreL1']."</div>";
					
				}
				
				echo "</div>";
				echo "</div>";
				echo "</a>";
				}
				
			
				
			
		}		
			


	

 ?>

</div>