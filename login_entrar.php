<?php 
session_start();
include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['pass']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
	    $pass = trim($_POST['pass']);
	    
	    $fechareg = date("d/m/y");
       	    $consulta = "SELECT id, nombre  FROM `datos` WHERE `email`= '$email' AND `pass`= '$pass'";
 	    $resultado = mysqli_query($conex,$consulta);
	    $count = mysqli_num_rows($resultado);
	    $row = mysqli_fetch_assoc($resultado);
	    $pre_has = $row['id'];
	    $nombre_user = $row['nombre'];	    
	    if ($count == 1) {
	    	?> 
		echo "pre_has";
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
		<?php
		 $_SESSION['id'] = $pre_has;
		 $_SESSION['nombre']= $nombre_user;
		header ("Location: home.php");
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
