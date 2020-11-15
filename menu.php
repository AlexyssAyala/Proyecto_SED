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

    echo "<h1><center> BIENVENIDO $nombre </h1></center><br>";
?>
<center>
<a href="recibo.php"><input type="button" value="Ver tus vuelos"></a>
<a href="home.php"><input type="button" value="Ingresar nuevo vuelo"></a>
<br>
<br>
</center>
<?php
    echo "<center><br><a href='salir.php'>Salir</a></center><br>";
}
?>

</body>
</html>
