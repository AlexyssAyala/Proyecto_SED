<!DOCTYPE html>
<html>
<head>
        <title>Editar</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
<?php
include("con_db.php");
	    
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM info_vuelos WHERE id=$id";
  $result = mysqli_query($conex, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $salida_fecha = $row['hora_salida'];
    $llegada_fecha = $row['hora_llegada'];
    $salida_pais = $row['partida'];
    $llegada_pais = $row['destino'];
    $tipo_vuelo = $row['tipo_vuelo'];
    $precio_vuelo = $row['precio'];
  }
}
             
           

if (isset($_POST['update'])) {
  $id = $_GET['id'];
  $salida_fecha= $_POST['salida'];
  $llegada_fecha = $_POST['llegada'];
  $salida_pais = $_POST['salidas_pais'];
  $llegada_pais = $_POST['destinos_pais'];
  $tipo_vuelo = $_POST['tipo_vuelo'];  
 if($tipo_vuelo == "Economica"){
                $precio_vuelo = "50.00";          
                }elseif($tipo_vuelo == "Ejecutivo" ){
                $precio_vuelo = "150.00";
                }elseif($tipo_vuelo == "Primera clase"){
                $precio_vuelo = "300.00";
                }

	echo $precio_vuelo;
  $query = "UPDATE info_vuelos SET `partida`= '$salida_pais',`destino`='$llegada_pais',`hora_salida`='$salida_fecha',`hora_llegada`='$llegada_fecha', `tipo_vuelo`= '$tipo_vuelo', `precio`= '$precio_vuelo' WHERE id=$id";
  mysqli_query($conex, $query);
  $_SESSION['message'] = ' Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: recibo.php');
}echo "hola";
?>

  <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="post" >
<h3>Categoria de vuelo </h3>
<input list="tipo_vuelo" name="tipo_vuelo" value="<?php echo $tipo_vuelo; ?>"  >
<datalist id="tipo_vuelo">
  <option value="Economica">
  <option value="Ejecutivo">
  <option value="Primera clase">


</datalist>
<br>
<br>

 Fecha de Salida:  <input type="date" name="salida" value="<?php echo $salida_fecha; ?>"<br>
        <br>
    Fecha de  Retorno: <input type="date" name="llegada" value="<?php echo $llegada_fecha; ?>" ><br>
   

<h3>Salidas</h3>
     <input list="browsers" name="salidas_pais" value="<?php echo $salida_pais; ?>">
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
 <input list="browsers" name="destinos_pais" value="<?php echo $llegada_pais; ?>">
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
    <input type="submit" value="Actualizar" name="update">
</form>

</body>
</html>
