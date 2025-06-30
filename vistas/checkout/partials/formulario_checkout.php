
<?php
    include 'modelo/DAOs/productosDAO.php';
?>
<h2>Confirmar compra</h2>
<p>Por favor confirmá los datos y finalizá tu compra.</p>

<!-- Resumen básico -->
<ul>
<?php
foreach ($_SESSION["carrito"] as $producto_id) {
    echo "<li>Producto ID: $producto_id</li>";
}
?>
</ul>

<!-- Botón para procesar -->
<a href="index.php?m=checkout&a=procesar">Finalizar compra</a>

<a href="index.php?m=carrito&a=verificar_compra" class="btn btn-success btn-lg mt-5 btn-block">REALIZAR COMPRA</a>
<a href="index.php?m=carrito&a=cancelar_compra" class="btn btn-danger btn-lg mt-5 btn-block">CANCELAR COMPRA</a>
<!--el boton CANCELAR COMPRA DEBE QUITAR TODOS LOS ELEMENTOS DEL CARRITO, vaciar el arreglo que está dentro de la variable carrito-->
</div>