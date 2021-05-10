<?php 

	require "conexion.php";
	require "php/cabecera.php";
 ?>
	
	<form id="paginaRegistro" method="post" >
		<h2>REGISTRAR BARBERIA</h2>
		<div>
			<label for="">Nombre</label>
			<input type="text" name="titulo">
		</div>
		<!--<div>
			<label for="">NIT</label>
			<input type="text" name="nit">
		</div>
		<div>
			<label for="">Direccion</label>
			<input type="text" name="direccion">
		</div>
		<div>
			<label for="">Movil</label>
			<input type="text" name="movil">
		</div>
		<div>
			<label for="">Ciudad</label>
			<select name="ciudad">
				<option value="Medellín">Medellín</option>
				<option value="Bogotá">Bogotá</option>
			</select> 
		</div>
		<div>
			<label for="">Contraseña</label>
			<input type="text" name="password">
		</div>
		<div>
			<label for="">Sitio Web</label>
			<input type="text" name="url">
		</div>-->
		<div>
			<button id="btnRegistrarPagina" type="submit">Registrar</button>
		</div>
	</form>
	
<?php 
	require 'php/footer.php';
 ?>