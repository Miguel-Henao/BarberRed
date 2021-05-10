<?php 
	
	



	

 


/*

elseif (isset($_SESSION['movilL2'])) {
$peticionImgPerfil5 = "SELECT * FROM imgperfil WHERE idusuario3 =".$_SESSION['idbarberiaL2']."";
	$respuestaImgPerfil5 = mysqli_query($conn, $peticionImgPerfil5);
	while ($filaImgPerfil5 = $respuestaImgPerfil5->fetch_array()) {
		$_SESSION['idusuario3IM4'] = $filaImgPerfil5['idusuario3'];
		$_SESSION['urlIM4'] =  $filaImgPerfil5['url'];
	}
}
*/
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.svg" type="image/x-icon">
	<title>BARBERRED</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/cortes.min.js"></script>
	<script src="js/pagina.min.js"></script>
</head>
<body>
	<header>
		<div class="logo">
			<a href="index.php"><h1>BARBERRED</h1></a>
		</div>
		<?php
			require_once "php/menus.php";
		?>
			
	</header>
