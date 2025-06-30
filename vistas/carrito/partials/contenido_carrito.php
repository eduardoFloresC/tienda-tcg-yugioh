
<?php
    include 'modelo/DAOs/productosDAO.php';
?>
<h1 align="center">MI CARRITO DE COMPRAS</h1>
<div class="container">
<table class="table-responsive-lg table-bordered text-center mt-5" style="width: 90%;">
    <thead class="thead-dark ">
    <tr>
      <th scope="col">Imagen</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>

    <?php
        if ( !isset($_GET["id_producto"] )){

            $indice = 0;

            foreach ($_SESSION["carrito"] as $id_articulo) {
                $infoArticulo = obtenerInfoArticulo($id_articulo);

                if ($infoArticulo === null) {
                    echo "<tr><td colspan='4' class='text-danger'>Producto con ID $id_articulo no disponible</td></tr>";
                    $indice++;
                    continue;
                }

                echo "<tr>";
                echo "<td><img src='img/" . htmlspecialchars($infoArticulo["prod_imagen"]) . "' class='card-img-top img-fluid' style='width: 250px'></td>";
                echo "<td>" . htmlspecialchars($infoArticulo["prod_nombre"]) . "</td>";
                echo "<td>" . htmlspecialchars($infoArticulo["prod_descripcion"]) . "</td>";
                echo "<td>" . htmlspecialchars($infoArticulo["prod_precio"]) . "<br>
                    <a class='btn btn-danger' href='index.php?m=carrito&a=quitar&indice=$indice'>Eliminar</a>
                    </td>";
                echo "</tr>";

                $indice++;
            }
        }

    ?>

    </table>
    <!-- <a href="index.php?m=carrito&a=verificar_compra" class="btn btn-success btn-lg mt-5 btn-block">REALIZAR COMPRA</a> -->
    <!-- <a href="index.php?m=ingreso&redirect=<?php echo urlencode('index.php?m=carrito&a=verificar_compra'); ?>" class="btn btn-success btn-lg mt-5 btn-block">REALIZAR COMPRA</a> -->
    <?php if (isset($_SESSION["usr_id"])): ?>
        <a href="index.php?m=carrito&a=verificar_compra" class="btn btn-success btn-lg mt-5 btn-block">REALIZAR COMPRA</a>
    <?php else: ?>
        <a href="index.php?m=ingreso&redirect=<?php echo urlencode('index.php?m=carrito&a=verificar_compra'); ?>" class="btn btn-success btn-lg mt-5 btn-block">REALIZAR COMPRA</a>
    <?php endif; ?>
    <a href="index.php?m=carrito&a=cancelar_compra" class="btn btn-danger btn-lg mt-5 btn-block">CANCELAR COMPRA</a>
    <!--el boton CANCELAR COMPRA DEBE QUITAR TODOS LOS ELEMENTOS DEL CARRITO, vaciar el arreglo que está dentro de la variable carrito-->
</div>