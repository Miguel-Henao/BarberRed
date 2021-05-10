<?php 
require "../conexion.php";


$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$peticion90 = "SELECT * FROM usuario WHERE idusuario = ".$_SESSION['idusuarioL1']." LIMIT 1";
$respuesta90 = mysqli_query($conn, $peticion90);
while ($fila90 = $respuesta90->fetch_array()) {

    $idregistrocorte = $fila90['idregistrocorte1'];
    $consultaCortes1 = "INSERT INTO cortes(titulo, descripcion, precio, idregistrocorte8) VALUES('$titulo', '$descripcion', '$precio', '$idregistrocorte')";
    echo mysqli_query($conn, $consultaCortes1);
}


    


?>