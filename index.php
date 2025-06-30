<?php
	$modulo="index";
	session_start();
	ob_start();

	if (isset($_REQUEST["m"]))
	{
		switch ($_REQUEST["m"]) {
			case "index":
				$modulo="index";
				break;
			case "ingreso":
				include "controladores/IngresoController.php";
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
			case 'carrito':
				$modulo="carrito";
				break;
			case 'agregar_producto':
				$modulo="agregar_producto";
				break;
			case 'agregar_al_carrito':
				$modulo="agregar_al_carrito";
				break;
			case 'registrar_producto':
				$modulo = "registrar_producto";
				break;
			case 'registrar_usuario':
				$modulo = "registrar_usuario";
				break;
			case 'verificar_compra':
				if (session_status() === PHP_SESSION_NONE) {
					session_start();
				}
				$modulo = "verificar_compra";
				break;
			case 'checkout':
				$modulo = "checkout";
				break;
		}
	} else {
    	$modulo = "index";
	}
	include "vistas/".$modulo."/index.php";
?>