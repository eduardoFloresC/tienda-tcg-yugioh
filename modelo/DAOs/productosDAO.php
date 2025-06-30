<?php

function obtenerProductos($textoBuscado) {
    $conexion = new mysqli("localhost", "root", "", "tcgtienda");
    $stmt = $conexion->prepare("SELECT * FROM productos WHERE prod_nombre LIKE ? OR prod_descripcion LIKE ?");
    $like = "%$textoBuscado%";
    $stmt->bind_param("ss", $like, $like);
    $stmt->execute();
    return $stmt->get_result();
}

function obtenerInfoArticulo($idArticulo) {
    $conexion = new mysqli("localhost", "root", "", "tcgtienda");
    $stmt = $conexion->prepare("SELECT * FROM productos WHERE prod_id = ?");
    $stmt->bind_param("i", $idArticulo);
    $stmt->execute();
    $resultado = $stmt->get_result();
    if ($resultado->num_rows === 0) {
        return null; // no existe el producto
    }

    return $resultado->fetch_assoc();
}