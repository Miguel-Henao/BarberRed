<?php
    require "../conexion.php";
?>

<?php

$diaN = $_POST['diaN'];
$horaN = $_POST['horaN'];
$idusuarioL1H = $_SESSION['idusuarioL1'];
    $peticion61 = "INSERT INTO registrohorario(idusuario11) VALUES($idusuarioL1H)";
    echo mysqli_query($conn, $peticion61);

        $peticion60 = "SELECT * FROM registrohorario WHERE idusuario11 = ".$idusuarioL1H." ORDER BY idusuario11 DESC LIMIT 1";
        $respuesta60 = mysqli_query($conn, $peticion60);
        while($fila60 = $respuesta60->fetch_array()){
            $idusuario11RH=$fila60['idusuario11'];
            $peticion63 = "INSERT INTO horarios(fecha, hora, estado, idregistroHorario2) VALUES ('$diaN', '$horaN', 'true', '$idusuario11RH')";
            echo mysqli_query($conn, $peticion63);
    }
    
    
   

    
    

    
?>