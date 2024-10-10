<?php
include "conectar.inc.php";
$sigla=$_GET["sigla"];
$sql = "delete from materias where sigla='$sigla'";
mysqli_query($con, $sql);
header("Location: materias.php");
?>