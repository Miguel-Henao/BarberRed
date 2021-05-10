<?php 
	require "conexion.php";
	require "php/cabecera.php";
	$_SESSION['cort4'] = $_GET['cort'];
 ?>
<body>
	<form id="frmSubirIMGC" method="post" enctype="multipart/form-data" >
	
		<div>
			<label for=""></label>
			<input type="file" name="imgc">
		</div>
		<div>
			<button id="btnSubirIMGC" type="submit">Subir</button>
		</div>
	</form>
	
<?php 
	require 'php/footer.php';
 ?>