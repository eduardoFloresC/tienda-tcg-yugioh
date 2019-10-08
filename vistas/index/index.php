
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>TCG COMPRA VENTA</title>
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="../css/estili.css">-->
	</head>
	<body>

		<div class="row">
			<div class="col-10">
				<div class="">
				<?php
				include("vistas/common/milogo.inc.php");
				?>
				</div>
			</div>
			<div>
					

				
		</div>
			</div>
			
		</div>
		
		

		<div class="container mt-2">
			
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="#">Navegación</a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="http:\\www.google.com">Ir a Google</a>
				      </li>
				      <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Listado Por Categorias
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="#">Core</a>
				          <a class="dropdown-item" href="#">Monster</a>
				          <a class="dropdown-item" href="#">Trap</a>
				          <a class="dropdown-item" href="#">Magic</a>
				          
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="#">Envíos al interior</a>
				        </div>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="false">Ayuda</a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
				      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
				    </form>
				  </div>
				</nav>

		</div>

		<div class="container">
			<div class="row">
				<div class="col-2">

				</div>
				<div class="">
					
					<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
					  <div class="carousel-inner">
					    <div class="carousel-item active" data-interval="10000">
					      <img src="img/a3.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item" data-interval="2000">
					      <img src="img/a5.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="img/a4.jpg" class="d-block w-100" alt="...">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>

				</div>
				
				<div class="container mt-5">
					<h2>Ofertas</h2>
					<div class="row">
						

							<?php
								$conexion = new mysqli("localhost", "root", "", "tcgmasterV3");

								$consulta = "SELECT * FROM productos ";

								$productos= $conexion->query($consulta);

								foreach ($productos as $producto){
										
									?><div class="card mr-5 mt-2" >
									<?php
									 echo "<b><li>".$producto ["prod_nombre"]."</li>";
									 ?>
									<img src=img/<?= $producto["prod_imagen"];?> width="200">
									<?php
									echo "<li> Precio del Producto :$ ".$producto ["prod_precio"]."</li></b>";
									?>
		        					</div>		
								<?php
								}

							?>
						  							
								</div>

					
				
			</div>
		</div>
		<?php
				include("vistas/common/mifooter.inc.php");
		?>
		
		<script src="vendor/jquery/jquery-3.4.1.min.js"></script>
		<script src="vendor/popper/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	</body>
</html>

<!-- para modelar

layoutit.com
bootstrap form builder

php y/o apache es el nexo entre el back end(base de datos) y el frontEnd



 -->