<?php
include("con_db.php");
session_start();
$sesion = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
if (isset($_POST['enviar'])) {
    if (strlen($_POST['salida']) >=1 && strlen($_POST['llegada']) >= 1 && strlen($_POST['salidas_pais']) >= 1 && strlen($_POST['destinos_pais']) >= 1  ) {
	    $salida_fecha = trim($_POST['salida']);
	    $llegada_fecha = trim($_POST['llegada']);
	    $salida_pais = trim($_POST['salidas_pais']);
	    $llegada_pais = trim($_POST['destinos_pais']);
	    $consulta = "INSERT INTO `info_vuelos`(`nombre`, `partida`, `destino`, `hora_salida`, `hora_llegada`) VALUES ('$nombre','$salida_pais','$llegada_pais','$salida_fecha','$llegada_fecha')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
	

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
}

?>

