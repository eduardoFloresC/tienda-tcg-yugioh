<?php
session_start();

if (!isset($_SESSION["usr_id"])) {
    header("Location: index.php?m=ingreso&redirect=" . urlencode("index.php?m=checkout"));
    exit;
}

if (empty($_SESSION["carrito"])) {
    header("Location: index.php?m=carrito&mensaje=" . urlencode("El carrito está vacío"));
    exit;
}

header("Location: index.php?m=checkout&a=mostrar");
exit;
?>