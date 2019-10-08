<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TCG COMPRA VENTA - Mi cuenta</title>
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="../../css/estili.css">-->
</head>
<body>
	<?php
		include("vistas/common/milogo.inc.php");
	?>
	<h1>Mi Cuenta</h1>
	
	<div class="container">
		<div class="row">
			Mis Publicaciones
			<?php
				$conexion = new mysqli("localhost", "root","","tcgmasterV3");

				$consulta = "SELECT * FROM productos WHERE $_SESSION["usr_id"]=productos["'usr_id'"]";

				foreach ($consulta as $ => $value) {
					# code...
				}
			?>
		</div>
		<div class="row">
			Agregar Publicación
		</div>
		<div class="row">
			Eliminar publicacion
		</div>

	</div>


	<?php
		include("vistas/common/mifooter.inc.php");
	?>
</body>
</html>