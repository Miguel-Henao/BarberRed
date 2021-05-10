<?php 
require "../conexion.php";
$diac=$_POST['diac'];
$horac=$_POST['horac'];
$corteS=$_SESSION['corteP1'];
$usuarioP=$_SESSION['idusuarioL1'];



$consultaPedido = "INSERT INTO pedido(idusuario1, barbero, total) VALUES ('$usuarioP','','')";

if (mysqli_query($conn, $consultaPedido)) {
	
}

$peticionPedido2 = "SELECT * FROM pedido WHERE idusuario1 =".$usuarioP." ORDER BY idpedido DESC LIMIT 1";
$resultadoPedido2 = mysqli_query($conn, $peticionPedido2);
while ($filaPedido2 = $resultadoPedido2->fetch_array()) {
	$idpedido = $_SESSION['idpedido'] = $filaPedido2['idpedido'];

}

		$peticionItemPedido1 = "INSERT INTO itempedido(idpedido1, idcortes1, fechapedido, horapedido) VALUES ('$idpedido','$corteS','$diac','$horac')";
		if(mysqli_query($conn, $peticionItemPedido1)){
	
		}else{
			echo "<p>No se agrego ningun corte.</p>";
		}
	



 ?>
 <script>
				window.location.href('perfil.php');
</script>
