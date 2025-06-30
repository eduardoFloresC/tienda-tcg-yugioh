<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ✅ Mostrar debug SOLO si querés testear
/*
echo "<pre>";
var_dump($_SESSION);
var_dump($_GET);
echo "</pre>";
exit;
*/

// ✅ Verificar login
if (empty($_SESSION["usr_id"])) {
    header("Location: index.php?m=ingreso&redirect=" . urlencode("index.php?m=pantalla_usuario"));
    exit;
}

// ✅ Conectarse y proteger la consulta
$conexion = new mysqli("localhost", "root", "", "tcgtienda");
$usr_id = intval($_SESSION['usr_id']); // asegurarse de que es un número

$sql = "SELECT * FROM usuarios 
        JOIN productos ON usuarios.usr_id = productos.usr_id 
        WHERE usuarios.usr_id = $usr_id";

$resultado = $conexion->query($sql);
?>
<body>
    <h1 class="text-center">Mis Publicaciones</h1>
    
    <a href="index.php?m=agregar_producto" class="btn btn-primary mb-2 ml-5">Agregar Nueva Publicación</a>
    <div class="container">
        <div class="row">
        <?php foreach ($resultado as $producto): ?>
            <div class="card text-center border-dark" style="max-width: 18rem; background-color: rgba(245, 245, 245, 0.4); font-size: larger;">
                <div class="card-header"><b><?= htmlspecialchars($producto["prod_nombre"]) ?></b></div>
                <div class="card-body">
                    <img src="img/<?= htmlspecialchars($producto["prod_imagen"]) ?>" class="card-img-top" style="width: 250px">
                    <p><b><?= htmlspecialchars($producto["prod_descripcion"]) ?></b></p>
                    <p>Precio: $ <?= htmlspecialchars($producto["prod_precio"]) ?></p>
                </div>
                <div class="card-footer">
                    <a class="btn btn-warning" href="#">Editar</a>
                    <a class="btn btn-success" href="index.php?m=pantalla_usuario&a=quitar&indice=<?= $producto['prod_id'] ?>">Eliminar</a>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</body>
