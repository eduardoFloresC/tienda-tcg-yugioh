<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>TCG COMPRA VENTA- Registro</title>
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estili.css">
</head>
<body>

	<?php
		include("vistas/common/milogo.inc.php");
	?>
	<h1>Registro de usuario</h1>
	<form action="">
		<div class="container">
			<div class="row ">
				<div class="col-2">
					<label for="alias">Alias de usuario :</label>
				</div>
				<div class="col-10">
					<input name="alias" type="text">
				</div>
			</div>
			<div class="row ">
				<div class="col-2">
					<label for="nombre">Nombre de usuario :</label>
				</div>
				<div class="col-10">
					<input name="nombre" type="text">
				</div>
			</div>
			<div class="row ">
				<div class="col-2">
					<label for="apellido">Apellido de usuario :</label>
				</div>
				<div class="col-10">
					<input name="apellido" type="text">
				</div>
			</div>
			<div class="row ">
				<div class="col-2">
					<label for="provincia">Provincia :</label>
				</div>
				<div class="col-10">
					<input name="provincia" type="text">
				</div>
			</div>
			<div class="row ">
				<div class="col-2">
					<label for="password">Contraseña :</label>
				</div>
				<div class="col-10">
					<input name="password" type="password">
				</div>
			</div>
			<div class="row ">
				<div class="col-2">
					<label for="email">E-mail :</label>
				</div>
				<div class="col-10">
					<input name="email" type="e-mail">
				</div>
			</div>

			<!---->
		
			<div class="row">
		      <label class="mr-sm-2 col-2" for="inlineFormCustomSelect">Provincia: </label>
		      <select class="custom-select mr-sm-2 col-2" id="inlineFormCustomSelect">
		        <option class="col-10" selected>Provincia...</option>
		        <?php
			        $conexion = new mysqli("localhost", "root","","tcgmasterV3");

					$consulta = "SELECT * FROM provincias";

					$provincias= $conexion->query($consulta);
		        	foreach ($provincias as $provincia) {
		        		?>

		        		<option value="<?= $provincia["provincia_id"];?>">

		        		<?= $provincia["nombre_provincia"] ?></option>

					<?php
		        	}
		        ?>
		        
		      </select>
	    	</div>

			<!---->


		</div>

		
		<input type="submit" value="Registrar">
		
	</form>

	<?php

		$conexion = new mysqli("localhost", "root","","tcgmasterV3");

		$ingreso = "INSERT INTO `usuarios` (`usr_id`, `usr_alias`, `usr_apellido`, `usr_nombre`, `provincia_id`, `email`) VALUES (NULL, 'alias','apellido','nombre','provincia','email');";

		$usuarios= $conexion->query($ingreso);

	?>

	<?php
		include("vistas/common/mifooter.inc.php");
	?>
</body>
</html>