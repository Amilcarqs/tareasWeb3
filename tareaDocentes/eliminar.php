<?php
include "conectar.inc.php";
$ci=$_GET["ci"];
$sql = "delete from persona where ci='$ci'";
mysqli_query($con, $sql);
header("Location: index.php");
?>