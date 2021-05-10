<?php 
require "../conexion.php";


$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$ciudad=$_POST['ciudad'];
$password= $_POST['password'];
$genero=$_POST['genero'];
$movil=$_POST['movil'];
$usuarirol = $_POST['rolU'];
$idpagina3 = 1;

	
$consultaUsuario="INSERT INTO usuario(nombre, idrolusuario1, idpagina3, genero, movil, direccion, ciudad, password) VALUES ('$nombre','$usuarirol','$idpagina3','$genero','$movil','$direccion','$ciudad','$password')";
echo mysqli_query($conn,$consultaUsuario);
 
 ?>	