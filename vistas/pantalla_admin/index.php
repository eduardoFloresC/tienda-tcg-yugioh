<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pantalla del administrador</title>
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estili.css">
</head>
<body>

	<?php
		include("vistas/common/milogo.inc.php");
	?>
	
	<h2>Lista de usuarios</h2>
	
	<?php
					
		$conexion = new mysqli("localhost", "root","","tcgmasterV3");

		$consulta = "SELECT * FROM usuarios ";

		$usuarios= $conexion->query($consulta);

		foreach ($usuarios as $usuario){
	
			 echo "<li>".$usuario ["usr_alias"]."</li>";
					
		
		}
	?>
	<?php
		include("vistas/common/mifooter.inc.php");
	?>
</body>
</html>