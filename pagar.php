<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>JS Bin</title>
  <style>

  </style>
</head>
<body>


<div class="container">
  <div class="col1">
    <div class="card">
      <div class="front">
        <div class="type">
          <img class="bankid"/>
        </div>
       
      </div>
      <div class="back">
        <div class="magnetic"></div>
        <div class="bar"></div>
        </div>
    </div>
  </div>
  <div class="col2">
    <label>Card Number</label>
    <input class="number" type="text" ng-model="ncard" maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
  <br> 
 <label>Cardholder name</label>
    <input class="inputname" type="text" placeholder=""/>
    <br><label>Expiry date</label>
    <input class="expire" type="text" placeholder="MM / YYYY"/>
    <br><label>Security Number</label>
    <input class="ccv" type="text" placeholder="CVC" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <br>
<?php
include("con_db.php");
if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT tipo_vuelo FROM info_vuelos WHERE id=$id";
  $result = mysqli_query($conex, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $tipo_vuelo = $row['tipo_vuelo'];
}
}
echo $tipo_vuelo;
?>
<button class="buy"><i class="material-icons">lock</i> Pay --.-- €</button>
  </div>
</div>

</body>
</html>
