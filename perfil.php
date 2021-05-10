
<?php 

	require "conexion.php";
	require "php/cabecera.php";
	
 ?>
	
	<main class="principal">
		


<?php 
	if (isset($_SESSION['movil1'])) {
		echo "<div style=\"background-color: rgba(0,0,0,0.4); padding: 10px 10px; color: #ffffff\">";

		echo "<div style=\"width: 20%; height: auto; padding: 10px; background-color: rgba(255,0,0,0.5); float: left; margin-left: 2%;\">";

		if (isset($_SESSION['idusuario3IM5'])) {
			echo "<div style=\"margin:auto;\">";
			echo "<img style=\"border-radius:60%;\" width=\"100px\" height=\"100px\" src=\"uploads/".$_SESSION['urlIM5']."\" alt=\"\">";
			echo "</div>";
		}else{

			echo "<a href=\"subirUsuario.php?useru=".$_SESSION['idusuarioL1']."\">Subir imagen</a>";
		}

		echo "<div>";
		echo "</div>";
		echo "<div><span>".$_SESSION['nombreL1']."</span></div>";
		echo "<div>".$_SESSION['tituloL2']."</div>";
		echo "<div><span>".$_SESSION['generoL1']."</span></div>";
		echo "<div><span>".$_SESSION['direccionL1']."</span></div>";
		echo "<div><span>".$_SESSION['ciudadL1']."</span></div>";
	}else {
		header("Location: index.php");
	}
		
		
	
?>

	<?php

	$consulta100 = "SELECT * FROM usuario WHERE  idusuario =".$_SESSION['idusuarioL1']."";
	$respuesta100 = mysqli_query($conn, $consulta100); 
	while ($fila100 = $respuesta100->fetch_array()) {
		if ($fila100['idregistrocorte1']==0) {
			echo "<form id=\"plan\" method=\"post\">";
			echo "<button type=\"sumbit\" id=\"plan\">Crear Cupo</button>";
			echo "</form>";
		}else {
			echo "<div><a href=\"registrarHorario.php\">Registrar Horario</a></div>";
		}
		
	}
	
	
	?>

</div>
</div>


<div id="listcortes" style="float:right; width:75%; heigth:250px; margin-right:;   padding:0 20px;"></div>

 <?php 
 	/*if ($_SESSION['movilL2']) {
 		echo "<div style=\"margin:auto;\">";
		if (isset($_SESSION['idusuario3IM4'])) {
		echo "<img style=\"border-radius:60%;\" width=\"80\" height=\"80\" src=\"uploads/".$_SESSION['urlIM4']."\" alt=\"\">";
		}else{
		echo "<a href=\"subirUsuario.php?useru=".$_SESSION['idbarberiaL2']."\">Subir imagen</a>";
		}
		echo "</div>";
 	}

*/
  ?>

 

	</main>
 <?php 
	require 'php/footer.php';
 ?>