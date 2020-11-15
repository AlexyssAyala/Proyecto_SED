<?php
include("con_db.php");
session_start();
$sesion = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
if (isset($_POST['enviar'])) {
    if (strlen($_POST['salida']) >=1 && strlen($_POST['llegada']) >= 1 && strlen($_POST['salidas_pais']) >= 1 && strlen($_POST['destinos_pais']) >= 1 && strlen($_POST['llegada']) >=1 ) {
	    $salida_fecha = trim($_POST['salida']);
	    $llegada_fecha = trim($_POST['llegada']);
	    $salida_pais = trim($_POST['salidas_pais']);
	    $llegada_pais = trim($_POST['destinos_pais']);
	    $tipo_vuelo = trim($_POST['tipo_vuelo']);
	    $precio_vuelo = "100";
	    if($tipo_vuelo == "Economica"){
                $precio_vuelo = "50.00";          
                }elseif($tipo_vuelo == "Ejecutivo" ){
                $precio_vuelo = "150.00";
                }elseif($tipo_vuelo == "Primera clase"){
                $precio_vuelo = "300.00";
                }
		
	    $consulta = "INSERT INTO `info_vuelos`(`nombre`, `partida`, `destino`, `hora_salida`, `hora_llegada`, `tipo_vuelo`,`id_sesion`, `precio`) VALUES ('$nombre','$salida_pais','$llegada_pais','$salida_fecha','$llegada_fecha','$tipo_vuelo','$sesion', '$precio_vuelo')";
	    $resultado = mysqli_query($conex,$consulta);
		
	  if ($resultado) {
		
		
		$sql="SELECT MAX(id) AS id FROM info_vuelos";
                $result=mysqli_query($conex,$sql);
                $mostrar=mysqli_fetch_assoc($result);
		$id_vuelo =  $mostrar['id'];
   		echo $id_vuelo;
		$sql2="SELECT precio  FROM info_vuelos WHERE id = $id_vuelo";
                $result2=mysqli_query($conex,$sql2);
                $precio_vuelo_enviar=mysqli_fetch_assoc($result2);
                $precio2 = $precio_vuelo_enviar['precio'];
		$_SESSION['precio']= $precio2;
header ("Location: pagar.php");

		

		
	    	?>
	    	<h3 class="ok">¡Tu vuelo ha sido añadido correctamente!</h3> 
        <?php
		
        }
 ?>

           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }


?>
