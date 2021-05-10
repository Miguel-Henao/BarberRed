<?php 
	require "php/cabecera.php";
	

 ?>
<form method="post" enctype="multipart/form-data" id="frmSubirIMGU">
		<div>
			<label for=""></label>
			<input type="file" name="imgu">
		</div>
		<div>
			<button type="submit" id="btnSubirIMGU">Subir</button>
		</div>
	</form>
	<?php 
		require 'php/footer.php';
	 ?>
	