<?php 
include("con_db.php");
session_start();
$sesion = $_SESSION['id'];

if (isset($_POST['register'])) {
    if (strlen($_POST['numero_tarjeta']) >= 1 && strlen($_POST['nombre_tarjeta']) >= 1 && strlen($_POST['expiracion']) >=1 && strlen($_POST['cvc']) >=1) {
            $numero_tarjeta = trim($_POST['numero_tarjeta']);
            $nombre_tarjeta = trim($_POST['nombre_tarjeta']);
            $expiracion = trim($_POST['expiracion']);
	    $cvc = trim($_POST['cvc']);
            $hash = password_hash($numero_tarjeta, PASSWORD_DEFAULT);
            $consulta = "INSERT INTO pagos( `numero_tarjeta`, `id_usuario`, `nombre_tarjeta`) VALUES ('$hash', '$sesion', '$nombre_tarjeta')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado) {
		header ("Location: menu.php");
                ?> 


                <h3 class="ok">¡Te has inscripto correctamente!</h3>

           <?php
            } else {
                ?> 
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
            }
    }   else {
header('Location: Fail.html');
                ?> 
                <h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>

