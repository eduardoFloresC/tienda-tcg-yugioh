


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>TCG COMPRA VENTA - Login</title>
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estili.css">
</head>
<body>
	
	<?php
		include("vistas/common/milogo.inc.php");



		if ( isset($_GET["nombre"] ) && isset($_GET["password"] ) ){

			$conexion = new mysqli("localhost", "root", "", "tcgmasterV3");

			$sql = "SELECT * FROM usuarios WHERE usr_alias = '" . $_GET["nombre"] . "' AND password = '" . $_GET["password"] . "'";

			$resultado = $conexion->query($sql);

			$usuario = $resultado->fetch_assoc();

			if ($_GET["nombre"]='"admin"' && $_GET["password"]='"password"') {
				header("Location:index.php?m=pantallaAdmin");
			}

			if( $resultado->num_rows == 1 ){
				
				$_SESSION["usuario"] = $_GET["nombre"];
				$_SESSION["nombre_real"] = $usuario["usr_nombre"];

				header("Location: index.php?m=pantalla_usuario");
			}
			else{
				echo "USUARIO O PASSWORD NO VALIDO";
			}

		}


	?>
	<h1>Ingresar a tu cuenta: </h1>
	<form action="index.php">
		<input name="m" type="hidden" value="ingreso">

		<div class="container">
			<div class="row ">
				<div class="col-2">
					<label for="nombre">Nombre de usuario: </label>
				
				</div>
				<div class="col-10">
					<input name="nombre" type="text">
				</div>
			
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-2">
					<label for="password">Contraseña: </label>
				
				</div>
				<div class="col-10">
					<input name="password" type="password">
				</div>
			
			</div>
			<input class="mt-2" type="submit" value="Ingresar">
			<div>
				<button type="button" class="btn btn-outline-warning mt-5"><a href="index.php?m=recuperacionPass" style="text-decoration: none;">Perdí mi contraseña</a> </button>
				
			</div>
		</div>
		
		

	</form>
	<?php
		include("vistas/common/mifooter.inc.php");
	?>
</body>
</html>