<?php
	session_start();
?>



<div class="container">
	<div class="row">
		<div class="col-10">
			<h1><a href="index.php"><img src="img/reino.png" width="200"></a>Toon World</h1>
			<h2>Compra Venta de TCG (Trading Card Games)</h2>
		</div>

		<?php
	if ( isset($_SESSION["usuario"]) ){
		echo "Bienvenido " . $_SESSION["nombre_real"];

		echo "<a href=\"index.php?m=logout\">Cerrar sesión</a>";
	}
	else{

?>
	<div class="mt-5 mr-10 ml-10">
		<div class=" row btn-group" role="group" aria-label="Basic example">
	  	<button type="button" class="btn btn-outline-success"><a href="index.php?m=ingreso" style="text-decoration: none;">Ingresar</a> </button>
	  	<button type="button" class="btn btn-outline-danger"><a href="index.php?m=registro" style="text-decoration: none;">Registrarte</a></button>
	</div>

<?php }
?>
	</div>
</div>









<!--
hay que usar integridad referencial cuando una tabla busca datos de otra

debo crear una tabla para provincias o categorias 
para asi tener las categorias o provincias bien cargadas todas escritas de la misma forma

desde sql a una campo se le puede poner el atributo unique, esto hace que ese mismo datos no se pueda repetir en esa columna, de esta forma evito que por ej se ingrese 2 veces el mismo email

controlador frontal, similar a MVC

dentro de la carpeta proyecto creo una carpeta vistas y dentro de esa carpeta otra carpeta para cada elemento de mi pagina web, elemento = entidad, personas u objetos importantes del sistema
creo una carpeta index, y dentro de esta ubico a mi index.php original

luego en la carpeta principal del sitio creo un archivo index.php y en este

va esto
paso por get parametros desde el navegador
< ?php

  $modulo="index"; //esto es por default, por si el usuario pone mal algo en el navegador
  if(isset($_GET["m"])
  {
	switch($_GET["m"])
  	{
  	case "index":
		//ir a index
		$modulo="index";
		break;
    case"eventos":
		//Ir a eventos
		$modulo="eventos";	
		break;
	case "peleadores":
		//Ir a peleadores
		$modulo="peleadores";
		break;
  	}

  }

  
	echo "Ir a ". $modulo;
	include "vistas/ . $modulo . "index.php";
	//cada carpeta de bera tener su propio index

?>

dentro de cada carpeta nueva creo otra carpeta partial


-->