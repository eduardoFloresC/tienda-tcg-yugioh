<?php

$accion = "listar";

if (isset($_REQUEST["a"])) {
	$accion = $_REQUEST["a"];
}


switch ($accion) {

	case 'listar':
		$contenido = "vistas/carrito/partials/contenido_carrito.php";
		include "vistas/common/base.inc.php";

		break;

	case 'quitar':
		session_start();

		if (isset($_GET["indice"])) {
			$indice =  $_GET["indice"];

			unset($_SESSION["carrito"][$indice]);

			$_SESSION["carrito"] = array_values($_SESSION["carrito"]);

			var_dump($_SESSION["carrito"]);
			header("Location: index.php?m=carrito");
		}

		break;

	case 'agregar':
		session_start();

		if (isset($_GET["id_producto"])) {
			$_SESSION["carrito"][] = $_GET["id_producto"];

			header("Location: index.php?");
		}
		break;

	case 'cancelar_compra':
		session_start();

		if (isset($_SESSION["carrito"])) {
			unset($_SESSION["carrito"]);
			$_SESSION["carrito"] = [];
			header("Location: index.php?m=carrito");
		}
		break;
	case 'verificar_compra':
		session_start();

		if (empty($_SESSION["carrito"])) {
			header("Location: index.php?m=carrito&mensaje=" . urlencode("Carrito vacío"));
			exit;
		}

		if (!isset($_SESSION["usr_id"])) {
			header("Location: index.php?m=ingreso&redirect=" . urlencode("index.php?m=carrito&a=verificar_compra"));
			exit;
		}

		header("Location: index.php?m=checkout&a=mostrar");
		exit;
		break;
}
?>