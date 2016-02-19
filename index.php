<!DOCTYPE html>
<html lang="es">
<head>
<<<<<<< HEAD
	<?php require_once 'assets/encabezados/udec.php' ?>
=======
	<meta charset="utf-8">
	<title>Universidad de Colima</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link type="image/x-icon" href="http://www.ucol.mx/cms/img/favicon.ico" rel="icon" />
	<!-- styles -->
	<link href="http://www.ucol.mx/cms/css/bootstrap3.css" rel="stylesheet">
	<link href="http://www.ucol.mx/cms/headerfooterapp.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/menu-style.css">
	<script src="http://www.ucol.mx/cms/js/jquery.min.js"></script> 	
>>>>>>> origin/master
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
<<<<<<< HEAD
			<?php require_once 'assets/menus/general.php' ?>
=======
			<ul>
				<li class="active"><a href="#">Inicio</a></li>
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" data-tagert="#menuLog">
					Usuario<span class="caret"></span></a>
					<ul class="dropdown-menu" id="menuLog">
						<li><a>Registro</a></li>
						<li><a>Log-in</a></li>
					</ul>
				</li>
				<li><a href="#">Fechas Destacadas</a></li>
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" data-targert="#menuCat">
					Categorias<span class="caret"></span></a>
					<ul class="dropdown-menu" id="menuCat">
						
						<li><a class="categoria">Medio Ambiente</a></li>
				        <li><a class="categoria">Tecnología</a></li>
				        <li><a class="categoria">Politica</a></li>
				        <li><a class="categoria">Ciencia</a></li>
				        <li><a class="categoria">Salud</a></li>
				        
					</ul>
				</li>
				<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" data-targert="#menuHelp">
					Ayuda<span class="caret"></span></a>
					<ul class="dropdown-menu" id="menuHelp">
						<li><a class="ayuda">Como Publicar</a></li>
						<li><a class="ayuda">Politicas</a></li>
					</ul>
				</li>
				<li><a href="#">Acerca de</a></li>
			</ul>
>>>>>>> origin/master
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
