<?php 
include 'conexion.php';
$consulta = mysqli_query($conexion,"SELECT * FROM estudiantes");
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Resultados Mysql</title>
 </head>
 <body>
 <section>
 	<table>
 		<tr>
 			<th>Id</th>
 			<th>Documento</th>
 			<th>Nombres</th>
 			<th>Apellidos</th>
 			<th>Correo</th>
 			<th>Telefono</th>
 		</tr>
 		<?php while($resultado = mysqli_fetch_array($consulta)){ 
 			echo '<tr>';
 				echo '<td>'.$resultado['id'].'</td>';
 				echo '<td>'.$resultado['documento'].'</td>';
 				echo '<td>'.$resultado['nombre'].'</td>';
 				echo '<td>'.$resultado['apellido'].'</td>';
 				echo '<td>'.$resultado['correo'].'</td>';
 				echo '<td>'.$resultado['telefono'].'</td>';
 			echo '</tr>';

 		 }?>
 	</table>
 </section>
 </body>
 </html>
