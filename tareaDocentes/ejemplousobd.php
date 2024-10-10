<?php 
include "conectar.inc.php";
$sql = "INSERT INTO persona (ci, nombres, apaterno) VALUES ('15', 'Mario', 'Alonzo')";
mysqli_query($con,$sql);
?>