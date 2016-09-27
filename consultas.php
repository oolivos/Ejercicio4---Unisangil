<?php 
include 'conexion.php';

$consulta = mysqli_query($conexion,"SELECT * FROM estudiantes");
while($resultado = mysqli_fetch_array($consulta)){
	
	echo '<h3>'.$resultado['documento'].'</h3>';
	echo '<h3>'.$resultado['nombre'].'</h3>';
	echo '<h3>'.$resultado['apellido'].'</h3>';
	echo '<h3>'.$resultado['correo'].'</h3>';
	echo '<h3>'.$resultado['telefono'].'</h3>';
}








 ?>