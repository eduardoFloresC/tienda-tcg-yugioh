<?php
	$modulo="index";

	if (isset($_GET["m"]))
	{
		switch ($_GET["m"]) {
			case "index":
				$modulo="index";
				break;
			case "ingreso":
				$modulo="ingreso";
				break;
			case 'registro':
				$modulo="registro";
				break;
			case 'recuperacionPass':
				$modulo="recuperacion_pass";
				break;

			case 'pantalla_usuario':
				$modulo="pantalla_usuario";
				break;
			case 'pantallaAdmin':
				$modulo="pantalla_admin";
				break;
			case 'logout':
				$modulo="logout";
				break;
			
		}
	}
	include "vistas/".$modulo."/index.php";
?>