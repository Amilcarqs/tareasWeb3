<?php
if (isset($_GET["Cancelar"]))
	header("Location: docentes.php");

include "conectar.inc.php";

$modifica=$_GET["modifica"];
$ci=$_GET["ci"];
$nombres=$_GET["nombres"];
$apaterno=$_GET["apaterno"];
$amaterno=$_GET["amaterno"];

if ($modifica==1)
	$sql = "update docentes set nombres='$nombres', apaterno='$apaterno', amaterno='$amaterno' where ci=$ci";
else
	$sql = "INSERT INTO docentes (ci, nombres, apaterno, amaterno) VALUES ('$ci', '$nombres', '$apaterno', '$amaterno');";

mysqli_query($con, $sql);
header("Location: docentes.php");
?>