<?php 
require "../conexion.php";

	$fileUpload = $_FILES['imgc'];
	$cort = $_SESSION['cort4'];

	if (!file_exists('../uploads')) {
		mkdir('../uploads',0777,true);
	}


	if ($fileUpload["type"] == "image/jpg" or $fileUpload["type"] == "image/jpeg") {
		if (file_exists('../uploads')) {
			$nombreF_encriptado=md5($fileUpload["tmp_name"]).".jpg";
			if (move_uploaded_file($fileUpload['tmp_name'], '../uploads/'.$nombreF_encriptado)) {
				if (isset($_SESSION['cort4'])) {
					$consultaFile = "INSERT INTO imgcortes(idcortes2, titulo, descripcion, url) VALUES ('$cort','','','$nombreF_encriptado')";
					echo mysqli_query($conn, $consultaFile);
				}	 
			
			}
		}
	}

	
	




 ?>
