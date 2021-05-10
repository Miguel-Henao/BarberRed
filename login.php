<div style="padding: 50px;">
  <form id="usuarioLogin" method="post">
 	<h2>INICIAR SESION</h2>
 	<div>
 		<label for="">Movil</label>
 		<input type="text" name="movil1">
 	</div>
 	<div>
 		<label for="">Contraseña</label>
 		<input type="password" name="pass1">
 	</div>
 	<div>
 		<a href="registrarusuario.php">Registrase</a>
 	</div>
 	<div>
		<button type="submit" id="btnusuarioLogin">Iniciar Sesion</button>
 	</div>
 </form>
<?php 
	require 'php/footer.php';
 ?>