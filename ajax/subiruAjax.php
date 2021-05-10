<?php  
require "../conexion.php";
	$fileUpload = $_FILES['imgu'];
	$iduseru = $_SESSION['idusuarioL1'];
	

	if (!file_exists('../uploads')) {
		mkdir('uploads',0777,true);
	}

	if ($fileUpload["type"] == "image/jpg" || $fileUpload["type"] == "image/jpeg") {
			if (file_exists('../uploads')) {
				$nombreF_encriptado=md5($fileUpload["tmp_name"]).".jpg";
				if (move_uploaded_file($fileUpload['tmp_name'], '../uploads/'.$nombreF_encriptado)) {
			
					if (isset($_SESSION['idusuarioL1'])) {
						$consultaFile = "INSERT INTO imgperfilu(idusuario3, titulo, url	) VALUES ('$iduseru','','$nombreF_encriptado')";
						if (mysqli_query($conn, $consultaFile)) {
							echo 1;
						} else{
							echo 0;
					}
				
				}

			}
		}
	}
	if ($fileUpload["type"] == "image/png") {
		if (file_exists('../uploads')) {
			$nombreF_encriptado=md5($fileUpload["tmp_name"]).".png";
			if (move_uploaded_file($fileUpload['tmp_name'], '../uploads/'.$nombreF_encriptado)) {
		
				if (isset($_SESSION['idusuarioL1'])) {
					$consultaFile = "INSERT INTO imgperfilu(idusuario3, titulo, url	) VALUES ('$iduseru','','$nombreF_encriptado')";
					if (mysqli_query($conn, $consultaFile)) {
						echo 1;
					} else{
						echo 0;
				}
			
			}

		}
	}
}
	
			


?>	
	