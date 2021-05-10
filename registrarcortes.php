<?php 
	require "php/cabecera.php";
 ?>

	<form id="corteRegistro" method="post">
		<h2>Registrar corte</h2>
		<div>
			<label for="titulo">Titulo</label>
			<input type="text" name="titulo">
		</div>
		<div>
			<label for="descripcion">Descripcion</label>
			<input type="text" name="descripcion">
		</div>
		<div>
			<label for="">Precio</label>
			<input type="text" name="precio">
		</div>
		
		<div>
			<button type="submit" id="btncorteRegistro">Registrar Corte</button>
		</div>
	</form>
	
<?php 
	require 'php/footer.php';
 ?>