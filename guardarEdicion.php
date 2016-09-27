<?php 
//Incluir Conexion
include 'conexion.php';
//Captura campos del formulario
$id = $_POST["id"];//nuevo
$documento = $_POST["documento"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["email"];
$telefono = $_POST["telefono"];

//preparar sentencia sql
$sentencia = "UPDATE estudiantes 
				SET documento = '$documento', nombre = '$nombre', apellido = '$apellido', correo = '$email', telefono = '$telefono' 
				WHERE id = $id";

//ejecuta la sentencia
$resultado = mysqli_query($conexion,$sentencia);
//Evaluar el resultado
if($resultado){
	echo "Estudiante editado Correctamente";
	echo "<a href='resultado.php' >Ver</a>";
}else{
	echo "Error al editar el estudiante ".mysqli_error($conexion);
	echo "<a href='editar.php?id=".$id."' >Volver</a>";
}

 ?>


 



