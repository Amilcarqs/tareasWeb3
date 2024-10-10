<?php
include "conectar.inc.php";
$modifica=$_GET["modifica"];
if ($modifica==1)
	$sigla=$_GET["sigla"];
else 
	$sigla="";

$sql = "SELECT * FROM materias WHERE sigla='".$sigla."'";
$resultado=mysqli_query($con,$sql);
$descripcion="";
if ($fila=mysqli_fetch_array($resultado))
{
	$descripcion=$fila["descripcion"];
}
?>
<html>
	<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	</head>
	<body style="background-color:#E3E6E1;">
		<h1>Datos de la persona</h1>
		<form method="GET" action="guardarmaterias.php">
			<input class="form-control" type="hidden" name="modifica" value="<?php echo $modifica;?>">
			<label class="col-form-label">Sigla</label>
			<input class="form-control" type="text" name="sigla" value="<?php echo $sigla;?>" <?php if ($modifica==1) echo "readonly";?> >
			<label class="col-form-label">Descripcion</label>
			<input class="form-control" type="text" name="descripcion" value="<?php echo $descripcion;?>">
		
			<input type="submit" class="btn btn-primary" name="Guardar" value="Guardar">
			<input type="submit" class="btn btn-danger" name="Cancelar" value="Cancelar">
		</form>

	</body>
</html>