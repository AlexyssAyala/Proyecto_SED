<?php

include("con_db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM info_vuelos  WHERE id = $id";
  $result = mysqli_query($conex, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = ' Removed Successfully';
  $_SESSION['message_type'] = 'danger';
  header('Location: recibo.php');
}

?>
