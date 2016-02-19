<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'assets/encabezados/udec.php' ?>
</head>

<body id="homepage">
<div id="estructura">
<header id="p-header">
	<div id="p-top">
		<div class="p-encabezado">
			<?php require_once 'assets/header-body/udec.php' ?>
		</div><!--encabezdo-->
	</div><!--top-->
</header>
<!--////////////////////////////////////////////////////////////////////CONTENIDOS///////////////////////////////////////////////////////////////////////-->
	
<div class="container">
    <div class="row p-superior">
	<div class="col-md-12 p-titulo"><h1>Blog de Innovación y TI.</h1></div>
		<div class="col-md-12 p-menu">
			<?php require_once 'assets/menus/general.php' ?>
		</div><!-- Termina menú -->
		<!--<div class="col-md-12 p-sesion"><b>Pedro Fernández Palominos</b> | <a href="#">SALIR</a></div>-->
	</div><!-- Termina Row p-superior -->

	<div class="row p-contenido">
		<!-- <div class="col-md-2 p-izquierda"> -->
		<!-- Izquierda -->
		<!-- </div> -->
		
		<div class="col-md-12 p-centro">
				<div id="contenedor_t">
					<!-- CONTENIDO AQUI -->
					<?php require_once('php/principal.php'); ?>
				</div>
			</div>
	<!-- 		<div class="col-md-3 p-derecha">
				Derecha -->
			</div> 
		</div>
		<div class="row p-inferior">
			<div class="col-md-12 p-content"></div>
		</div>
	</div>

<!--////////////////////////////////////////////////////////////////////PIE///////////////////////////////////////////////////////////////////////-->		
</div><!--estructura-->
		<footer id="p-footer"><!-- footer -->
			<?php require_once 'assets/pie-pagina/udec.php' ?>
		</footer>
		<!--footer-->
		<!-- cierra footer-->
       <!-- javascript -->

	<?php require_once 'assets/scripts/udec.php' ?> <!-- scripts -->
	</body>
</html>
