<?php 
session_start();
include("con_db.php");

$sesion = $_SESSION['id'];
if (isset($_POST['register'])) {
    if (strlen($_POST['pass']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $pass = trim($_POST['pass']);
	    
	    $fechareg = date("d/m/y");
       	    $consulta = "SELECT id, nombre, pass  FROM `datos` WHERE `email`= '$email'";
 	    $resultado = mysqli_query($conex,$consulta);
	    $count = mysqli_num_rows($resultado);
	    $row = mysqli_fetch_assoc($resultado);
	    $pre_has = $row['id'];
	    $nombre_user = $row['nombre'];	    
	    if ($count == 1) {
			if (password_verify($pass, $row['pass'])) {
 			  $_SESSION['id'] = $pre_has;
                 	$_SESSION['nombre']= $nombre_user;
                	header ("Location: menu.php");

			} else {
    			echo 'La contraseña no es válida.';
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
}

?>
