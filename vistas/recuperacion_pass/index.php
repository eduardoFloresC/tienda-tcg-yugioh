<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TCG COMPRA VENTA - Recuperación de contraseña</title>
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estili.css">
</head>
<body>
	<?php
		include("vistas/common/milogo.inc.php");
	?>
	<h1>Recuperar mi contraseña</h1>
		<form action="">
			<div class="container">
				<div class="row ">
					<div class="col-2">
						<label for="e-mail">Ingrese su e-mail:</label>
					</div>
				<div class="col-10">
					<input name="e-mail" type="email">
				</div>
				</div>
				<input type="submit">
			</div>

		</form>	

	<?php
		include("vistas/common/mifooter.inc.php");
	?>
</body>
</html>