<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Pagar vuelo</title>
  <style>

  </style>
</head>
<body>

<?php
 session_start();
 $precio_vuelo = $_SESSION['precio'];
 $id_sesion = $_SESSION['id'];
  echo "Total a pagar: $ ";
  echo  $precio_vuelo;
  echo  $id_sesion;
?>
<br>
   <!DOCTYPE html>
<html>
<head>
      	<title>Registrar usuario</title>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

    <form method="post">
        <h1>Ingresa tu tarjeta</h1>

Card Number  <input type="number" name="numero_tarjeta" placeholder="Card Number" class="form-input" required/>
Cardholder name    <input type="text" name="nombre_tarjeta" placeholder="Cardholder name" class="form-input" required/>  
Expiry date  <input type="number" name="expiracion" placeholder="MM/YY" class="form-input"requiered />
Security Number <input type="number" name="cvc" placeholder="CVC" class="form-input"requiered /> 
  <input class="form-btn"  type="submit" name="register" value="Pagar">
        </form>
        <?php 
	include("pagar_insert.php");
        ?>
	
</body>
</html> 




</body>
</html>
