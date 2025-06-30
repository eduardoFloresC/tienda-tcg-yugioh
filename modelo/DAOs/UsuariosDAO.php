<?php

class UsuariosDAO {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function login($alias, $password) {
        // Evitar inyección SQL
        $alias = $this->conexion->real_escape_string($alias);
        $password = $this->conexion->real_escape_string($password);

        $sql = "SELECT * FROM usuarios WHERE usr_alias = '$alias' AND password = '$password'";
        $resultado = $this->conexion->query($sql);

        if ($resultado && $resultado->num_rows === 1) {
            return $resultado->fetch_assoc();
        } else {
            return null;
        }
    }
}
