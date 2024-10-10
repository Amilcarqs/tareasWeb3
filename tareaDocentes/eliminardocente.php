<?php
include "conectar.inc.php";
$ci=$_GET["ci"];
$sql = "delete from docentes where ci='$ci'";
mysqli_query($con, $sql);
header("Location: docentes.php");
?>