<?php 

	require "conexion.php";
	require "php/cabecera.php";
 ?>
	
	<form method="post" id="usuarioRegistro">
			<h2>REGISTRAR USUARIO</h2>
		<div>
			<label for="nombre">Nombre</label>
			<input type="text" name="nombre" id="nombre">
		</div>
		<div>
			<label for="movil">Direccion</label>
			<input type="text" name="direccion" id="direccion">
		</div>
		<div>
			<label for="">Movil</label>
			<input type="text" name="movil" id="movil">
		</div>
		<div>
			<label for="genero">Genero</label>
			<select name="genero" id="genero">
				<option value="Masculino">Hombre</option>
			</select> 
		</div>
		<div>
			<label for="ciudad">Ciudad</label>
			<select name="ciudad" id="ciudad">
				<option value="Medellín">Medellín</option>
				<option value="Bogotá">Bogotá</option>
			</select> 
		</div>
		<div>
			<label for="password">Contraseña</label>
			<input type="text" name="password" id="password">
		</div>
		<div>
			<label for=""></label>
			<select name="rolU" id="">
				<option value="2">Barbero</option>
				<option value="3">Cliente</option>
			</select>
		</div>
		
		<div>
			<button type="submit" id="btnRegistrarU">Registrar</button>
		</div>
	</form>
	
<?php 
	require 'php/footer.php';
 ?>