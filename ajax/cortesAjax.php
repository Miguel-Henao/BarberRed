

<?php  
		$consultaCortes = "SELECT * FROM cortes WHERE idregistrocorte8 =".$_SESSION['idregistrocorte1L1']."";
		$respuetaCortes = mysqli_query($conn,$consultaCortes);
		if (empty($respuetaCortes)) {
			echo "<h2>No se han registrado cortes</h2> ";
			echo "<a href=\"registrarcortes.php\">Registrar un corte</a>";
		
		}else{
			while($filaCortes = $respuetaCortes->fetch_array()){
			echo "<div>";			
			echo "<h2>".$filaCortes['titulo']."</h2>";
			echo "<p>".$filaCortes['descripcion']."</p>";
			echo "<p>".$filaCortes['precio']."</p>";
			echo "</div>";
		    }
		}
?>
		