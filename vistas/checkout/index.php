<?php
// session_start(); // asegurate que la sesión esté iniciada

// Debug solo si querés, luego comentar o borrar estas líneas:
// echo "<pre>GET:\n";
// var_dump($_GET);
// echo "</pre>";
// exit;

$accion = "mostrar";

if (isset($_REQUEST["a"])) {
    $accion = $_REQUEST["a"];
}

switch ($accion) {

    case 'mostrar':
        // Verificamos login y carrito
        if (!isset($_SESSION['usr_id'])) {
            header("Location: index.php?m=ingreso&redirect=" . urlencode("index.php?m=checkout&a=mostrar"));
            exit;
        }

        if (empty($_SESSION['carrito'])) {
            header("Location: index.php?m=carrito&mensaje=" . urlencode("Carrito vacío"));
            exit;
        }

        $contenido = "vistas/checkout/partials/formulario_checkout.php";
        include "vistas/common/base.inc.php";
        break;

    case 'procesar':
        // Aquí procesás la compra: guardás en DB, limpiás carrito, etc.
        // Simulemos:
        unset($_SESSION["carrito"]);
        $_SESSION["carrito"] = [];

        // Redirigimos a una página de éxito
        header("Location: index.php?m=checkout&a=exito");
        exit;
        break;

    case 'exito':
        echo "<h2>¡Gracias por tu compra!</h2>";
        echo "<a href='index.php'>Volver al inicio</a>";
        break;
}
?>
