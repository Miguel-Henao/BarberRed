<?php 
	session_start();
	define("HOST", "localhost");
	define("USER","root");
	define("PASS", "");
	define("DB", "barberia");
	
	//conectarce
	$conn = mysqli_connect(HOST,USER,PASS,DB);
	
 ?>