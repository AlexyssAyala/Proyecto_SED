<!DOCTYPE html>
<html>
<head>
      	<title>Registrar usuario</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
session_start();
$sesion = $_SESSION['id'];
$nombre = $_SESSION['nombre'];
if(!isset($nombre)){
    header("location: index.php");

}else{

    echo "<h1> BIENVENIDO $nombre </h1><br>";

    echo "<a href='salir.php'>Salir</a>";
}
?>
	<form method="post">
 Fecha de Salida:  <input type="date" name="salida"><br>
	<br>
    Fecha de  Retorno: <input type="date" name="llegada"><br>
    
<h3>Salidas</h3>
     <input list="browsers" name="salidas_pais">
    <datalist id="browsers">
    <option value="El Salvador">
    <option value="Mexico">
    <option value="EE.UU">
    <option value="Canada">
    <option value="Guatemala"> 
    <option value="Nicaragua">
    <option value="Brazil">
    <option value="Belice">
    <option value="España">
    <option value="Francia">
    <option value="Alemania">
    <option value="Australia">
    <option value="Panama">
    <option value="Costa Rica">
    <option value="Colombia">
    <option value="Africa">
  </datalist>
 <h3>Destinos</h3>
 <input list="browsers" name="destinos_pais">
  <datalist id="browsers2">
<option value="El Salvador">
    <option value="Mexico">
    <option value="EE.UU">
    <option value="Canada">
    <option value="Guatemala"> 
    <option value="Nicaragua">
    <option value="Brazil">
    <option value="Belice">
    <option value="España">
    <option value="Francia">
    <option value="Alemania">
    <option value="Australia">
    <option value="Panama">
    <option value="Costa Rica">
    <option value="Colombia">
    <option value="Africa">
  </datalist>
    <input type="submit" value="Enviar" name="enviar">
<a href="recibo.php"><input type="button" value="Ver tus vuelos"></a>

</form>

        <?php 
	include("registro_vuelo.php");
        ?>

</body>
</html>
