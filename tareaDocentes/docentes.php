<?php
include "conectar.inc.php";
$sql = "SELECT * FROM docentes";
$resultado=mysqli_query($con, $sql);
?>
<html>
	<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
	</head>
	<body style="background-color:#E3E6E1;">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
		<div class="sidenav">
			<a href="index.php">Estudiantes</a>
			<a href="docentes.php">Docentes</a>
			<a href="materias.php">Materias</a>
		</div>

		<div class="content">
			<h1>Docentes</h1>
			<table class="table table-dark">
				<tr>
					<td>CI</td>
					<td>Nombre</td>
					<td>Ap.Paterno</td>
					<td>Ap.Materno</td>
					<td>Opraciones</td>
				</tr>
				<?php
				while($fila=mysqli_fetch_array($resultado))
				{
				?>
				<tr>
					<td><?php echo $fila["ci"]; ?></td>
					<td><?php echo $fila["nombres"]; ?></td>
					<td><?php echo $fila["apaterno"]; ?></td>
					<td><?php echo $fila["amaterno"]; ?></td>
					<td>
						<a href="modificardocente.php?ci=<?php echo $fila['ci']; ?>&modifica=1" class="btn btn-secondary">Modificar</a>
						<a href="eliminardocente.php?ci=<?php echo $fila['ci']; ?>" class="btn btn-danger">Eliminar</a>
					</td>
				</tr>
				<?php
				}
				?>
			</table>
			<a href="modificardocente.php?modifica=0" class="btn btn-primary">Adicionar</a>
		</div>
	</body>
</html>