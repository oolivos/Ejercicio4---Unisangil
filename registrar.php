<?php 
//Incluir Conexion
include 'conexion.php';

//Captura campos del formulario
$documento = $_POST["documento"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["email"];
$telefono = $_POST["telefono"];

//preparar sentencia sql
$sentencia = "INSERT INTO 
				estudiantes(documento,nombre,apellido,correo, telefono) 
				VALUES('$documento','$nombre','$apellido','$correo','$telefono')";

//ejecuta la sentencia
$resultado = mysqli_query($conexion,$sentencia);
//Evaluar el resultado
if($resultado){
	echo "Estudiante creado Correctamente";
	echo "<a href='resultado.php' >Ver</a>";
}else{
	echo "Error al registrar el estudiante ".mysqli_error($conexion);
	echo "<a href='registro.html' >Volver</a>";
}

 ?>











