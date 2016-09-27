<?php 
include 'conexion.php';
//obtener variable de la url
$id = $_GET['id'];
//construir sentencia sql para recuperar los datos del estudiante
$sentencia = "SELECT * FROM estudiantes WHERE id = $id";
$resultado = mysqli_query($conexion,$sentencia);
$estudiante = mysqli_fetch_array($resultado);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Editar Estudiante</title>
 	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="css/estilos.css">
 </head>
 <body>
 <h2>Edicion de Estudiantes</h2>
<form action="guardarEdicion.php" method="post">
	<input type="text" name="documento" placeholder="Ingrese Documento" required value="<?php echo $estudiante['documento'] ?>">
	<input type="text" name="nombre" placeholder="Ingrese Nombre" required value="<?php echo $estudiante['nombre'] ?>">
	<input type="text" name="apellido" placeholder="Ingrese Apellido" required value="<?php echo $estudiante['apellido'] ?>">
	<input type="tel" name="telefono" placeholder="Ingrese telefono" required value="<?php echo $estudiante['telefono'] ?>">
	<input type="email" name="email" placeholder="Ingrese Email" required value="<?php echo $estudiante['correo'] ?>">
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<button type="submit">Actualizar</button>
	<button type="reset"><a href="resultado.php">Volver</a></button>
	

</form>
 
 </body>
 </html>