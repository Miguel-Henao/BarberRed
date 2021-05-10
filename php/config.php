
<?php
if (isset($_SESSION['movil1'])) {
 	$peticionImgPerfil4 = "SELECT * FROM imgperfilu WHERE idusuario3 =".$_SESSION['idusuarioL1']."";
	$respuestaImgPerfil4 = mysqli_query($conn, $peticionImgPerfil4);
	while ($filaImgPerfil4 = $respuestaImgPerfil4->fetch_array()) {
		$_SESSION['idusuario3IM5'] = $filaImgPerfil4['idusuario3'];
		$_SESSION['urlIM5'] =  $filaImgPerfil4['url'];
	}

	$peticionPagina4 = "SELECT * FROM pagina";
	$respuestaPagina4 = mysqli_query($conn, $peticionPagina4);
	while ($filaPagina4 = $respuestaPagina4->fetch_array()) {
			$_SESSION['idpaginaL2'] = $filaPagina4['idpagina'];
	}
	
}
?>