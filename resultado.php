<?php 
include 'conexion.php';
$consulta = mysqli_query($conexion,"SELECT * FROM estudiantes");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Resultados Mysql</title>
 	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="css/estilos.css">
 </head>
 <body>
 <section>
 <h1>Estudiantes Registrados</h1>
 	<table>
 		<tr>
 			<th>Id</th>
 			<th>Documento</th>
 			<th>Nombres</th>
 			<th>Apellidos</th>
 			<th>Correo</th>
 			<th>Telefono</th>
 			<th></th>
 		</tr>
 		<?php while($resultado = mysqli_fetch_array($consulta)){ ?>
 			<tr>
 				<td><?php echo $resultado['id'] ?></td>
 				<td><?php echo $resultado['documento'] ?></td>
 				<td><?php echo $resultado['nombre'] ?></td>
 				<td><?php echo $resultado['apellido'] ?></td>
 				<td><?php echo $resultado['correo'] ?></td>
 				<td><?php echo $resultado['telefono'] ?></td>
 				<td><a href="editar.php?id=<?php echo $resultado['id'] ?>">Editar</a> </td>
 			</tr>

 		<?php }?>
 	</table>
 </section>
 </body>
 </html>










