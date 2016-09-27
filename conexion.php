<?php 
$server = "localhost";
$username = "root";
$password = "root";
$bd = "unisangil";

$conexion = mysqli_connect($server, $username,$password,$bd);

if(!$conexion){	
	echo "Error al Conectar". mysqli_error();
}

 ?>