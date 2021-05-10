<?php 
require "../conexion.php";


$nombre=$_POST['titulo'];
$idusuarioL1 = $_SESSION['idusuarioL1'];

$consulta1 = "INSERT INTO pagina(idrolpagina1, titulo) VALUES(2,'$nombre')";
if(mysqli_query($conn, $consulta1)){
	
	$consulta20 = "SELECT * FROM pagina ORDER BY idpagina DESC LIMIT 1";
	$respuesta20 = mysqli_query($conn, $consulta20);
	while ($fila20 = $respuesta20->fetch_array()) {
		$idpagina44 = $fila20['idpagina'];
		
		$consulta44 = "UPDATE usuario SET idpagina3 = $idpagina44 WHERE idusuario = '$idusuarioL1' ";
		if (mysqli_query($conn, $consulta44)) {
			echo 1;	
		}else {
			echo 0;
		}
	}
		
}

 

 ?>	