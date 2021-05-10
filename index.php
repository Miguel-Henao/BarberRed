<?php  
require "conexion.php";
require "php/config.php";
require "php/cabecera.php";

?>
 	<?php 


	if (isset($_SESSION['movil1'])) {
		require "ajax/cortesAjax.php";
	}else{
		require "login.php";
	}
 		
   ?>

<?php 
	require 'php/footer.php';
 ?>
