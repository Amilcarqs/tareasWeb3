<?php
if (isset($_GET["Cancelar"]))
	header("Location: materias.php");

include "conectar.inc.php";

$modifica=$_GET["modifica"];
$sigla=$_GET["sigla"];
$descripcion=$_GET["descripcion"];


if ($modifica==1)
	$sql = "update materias set descripcion='$descripcion' where sigla='$sigla'";
else
	$sql = "INSERT INTO materias (sigla, descripcion) VALUES ('$sigla', '$descripcion');";
echo $sql;
mysqli_query($con, $sql);
header("Location: materias.php");
?>