<?php 
	$url="localhost";
	$usuario= "root";
	$pass = '';
	$db= "desafio";

	$con = mysqli_connect($url,$usuario,$pass,$db) or die ("problemas en la conexión");

	
	if ($con->connect_error) {
		die("Fallo la conexion: " . $con->connect_error);
	}
?>