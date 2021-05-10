<?php
require_once "../conexion.php";
$idusuarioL1Cupo = $_SESSION['idusuarioL1'];
$peticion56 = "SELECT * FROM usuario WHERE idusuario = ".$_SESSION['idusuarioL1']."";
$respuesta56 = mysqli_query($conn, $peticion56);
while($fila56 = $respuesta56->fetch_array()) {
    $idpagina3Cupo = $fila56['idpagina3'];
    $idusuarioCupo = $fila56['idusuario'];
 
       $peticion57 = "INSERT INTO registrocorte(idpagina8, idusuario8, idcortes8) VALUES ('$idpagina3Cupo', '$idusuarioCupo', 3)";
        if (mysqli_query($conn, $peticion57)) {
            $peticion58 = "SELECT * FROM registrocorte WHERE idusuario8 = '$idusuarioCupo' ORDER BY idusuario8 DESC LIMIT 1";
            $respuesta58 = mysqli_query($conn, $peticion58);
            while($fila58 = $respuesta58->fetch_array()){
                $idregistrocorteCupo = $fila58['idregistrocorte'];
                $peticion59 = "UPDATE usuario SET idregistrocorte1 = $idregistrocorteCupo WHERE idusuario = ".$_SESSION['idusuarioL1']."";
                    if (mysqli_query($conn, $peticion59)) {
                        echo 1;
                    } else {
                        echo 0;
                    }
                
            
        }            
    }
}

?>