<?php 

	$conexion = mysqli_connect("localhost","root","Ah9RHE4P(&7.","registro");

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
	<script src="https://kit.fontawesome.com/60df851bde.js" crossorigin="anonymous"></script>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			
			<td>Nombre de Cliente</td>
			
			<td>Pais de Partida</td>
			<td>Pais de Destino</td>
			<td>Fecha de llegada</td>
			<td>Fecha de Salida</td>
			<td>Tipo de vuelo</td>
			<td>Precio</td>
			<td>Opciones </td>	
		</tr>

		<?php 
		session_start();
                $sesion = $_SESSION['id'];

$sql="SELECT id,nombre,partida,destino,hora_salida,hora_llegada, tipo_vuelo, precio from info_vuelos WHERE id_sesion = $sesion";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_assoc($result)){

		 ?>

		<tr>
			
			<td><?php echo $mostrar['nombre'] ?></td>
			
			<td><?php echo $mostrar['partida'] ?></td>
			<td><?php echo $mostrar['destino'] ?></td>
			<td><?php echo $mostrar['hora_salida']?></td>
			<td><?php echo $mostrar['hora_llegada']?></td>
			<td><?php echo $mostrar['tipo_vuelo']?></td>
			<td><?php echo "$ ". $mostrar['precio']?></td>
			<?php
			 $id_algo = $mostrar['id'];
			 $id_algo = base64_encode($id_algo)
			?>
			<td>  <a href="edit.php?id=<?php echo $id_algo?>"><i class="fas fa-edit"></i></a>
			<br>
			<a href="delete.php?id=<?php echo $mostrar['id']?>"><i class="fas fa-trash-alt"></i></a></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
<a href="menu.php"><input type="button" value="Regresar"></a>

</body>
</html>
