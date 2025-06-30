<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once("modelo/DAOs/UsuariosDAO.php");

$conexion = new mysqli("localhost", "root", "", "tcgtienda");
$usuariosDAO = new UsuariosDAO($conexion);

$mensaje = "";

if (isset($_GET["nombre"]) && isset($_GET["password"])) {
    $usuario = $usuariosDAO->login($_GET["nombre"], $_GET["password"]);

    if ($usuario !== null) {
        $_SESSION["usuario"] = $usuario["usr_alias"];
        $_SESSION["nombre_real"] = $usuario["usr_nombre"];
        $_SESSION["usr_id"] = $usuario["usr_id"];
        $_SESSION["usr_alias"] = $usuario["usr_alias"];

        if (!empty($_GET["redirect"])) {
            header("Location: " . urldecode($_GET["redirect"]));
        } else {
            header("Location: index.php?m=pantalla_usuario");
        }
        exit;
    } else {
        $mensaje = "Usuario o contraseña no válido";
    }
}

// Mostramos la vista
$contenido = "vistas/ingreso/partials/contenido_ingreso.php";
include "vistas/common/base.inc.php";
