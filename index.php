<!DOCTYPE html>
<html lang="es">
<head>
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
</head>

<body id="homepage">
<div id="estructura">
<header id="p-header">
	<div id="p-top">
		<div class="p-encabezado">
			<div class="linkUcol">
				<a class="escudo" href="http://www.ucol.mx/">&nbsp;</a>
				<a class="nombre" href="http://www.ucol.mx/">&nbsp;</a>
			</div>
			<div class="TituloDep"></div>
				<ul class="hidden-mobile" id="menu-header">
				<form action="http://www.ucol.mx/conocenos/buscar.htm" id="search-form" class="">
					<div class="input-append pull-right">
				        <input type="hidden" value="008220538144971964399:mwxy_s7mt4u" name="cx">
						<input type="hidden" value="FORID:10" name="cof"> 
						<input type="hidden" value="UTF-8" name="ie"> 
                        <input id="q" class="search" name="q" type="text" placeholder="Buscar en ucol..." size="16">
						<input name="more" class="botonbuscar" value="" type="submit">
					</div>
				</form>
				<li><a href="http://www.ucol.mx/alumnos/" target="_blank">Alumnos</a></li>
				<li><a href="http://www.ucol.mx/trabajadores/" target="_blank">Trabajadores</a></li>
				</ul>   
		</div><!--encabezdo-->
	</div><!--top-->
</header>
<!--////////////////////////////////////////////////////////////////////CONTENIDOS///////////////////////////////////////////////////////////////////////-->
	
<div class="container">
    <div class="row p-superior">
	<div class="col-md-12 p-titulo"><h1>Blog de Innovación y TI.</h1></div>
		<div class="col-md-12 p-menu">
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
			<div class="inner">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 mapa">
							<div class="address pull-right">
								<ul>
									<li><i class="icon-address"></i><strong>Direcci&oacute;n:</strong> Av. Universidad No. 333, Las V&iacute;boras; CP 28040 Colima, Colima, M&eacute;xico</li>
								   <!--<li><i class="icon-email"></i><a href="/portal-web/Directorio.htm">Directorio</a></li>
									<li><i class="icon-map"></i><a href="/conocenos/mapa.htm">Mapa del sitio</a></li>-->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="p-copyright">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="col-md-6 col-xs-6 izquierda">
								<a href='http://www.sep.gob.mx/' target="_blank"><img src="http://www.ucol.mx/cms/img/LogoSEP1.png"></a>
								<a href='http://www.anuies.mx/' target="_blank"><img src="http://www.ucol.mx/cms/img/anuies.png"></a>
								<a href='http://www.unesco.org/new/es/' target="_blank"><img src="http://www.ucol.mx/cms/img/unesco.png"></a>
								<a href='http://www.cumex.org.mx/' target="_blank"><img src="http://www.ucol.mx/cms/img/consorcio.png"></a>
							</div>
							<div class="col-md-6 col-xs-6 derecha">
								<a href='http://www.federaciondeestudiantescolimenses.com/' target="_blank"><img src="http://www.ucol.mx/cms/img/LogoFEC.png"  width="81px" height="30px" ></a>					
								&nbsp;<a href='#' target="_blank"><img src="http://www.ucol.mx/cms/img/SUTUC.png"></a>	
								&nbsp;<a href='http://portal.ucol.mx/feuc/'  target="_blank"><img src="http://www.ucol.mx/cms/img/LogoFEUC.png"></a>
								<!-- &nbsp;<a href='http://www.fundacionucol.org/' target="_blank"><img src="/cms/img/fundacionUcol.png"></a> -->
							</div>
						</div>
						<div class="col-md-12 derechos">&copy; Derechos Reservados 2013-2016 Universidad de Colima</div>
					</div>
				</div>
			</div>   
		</footer>
		<!--footer-->
		<!-- cierra footer-->
       <!-- javascript -->

	<!--<script src="/js/jquery-1.7.2.min.js"></script>
	
	<script src="/js/superfish.js"></script>
	<script src="/js/jquery.mobilemenu.js"></script>
	<script src="/js/jquery.tweet.js"></script>
	<script src="/js/jquery.flexslider.js"></script>
    <script src="/js/custom.js"></script>  -->
	<!--<script src="/cms/js/bootstrap/js/bootstrap.min.js"></script> -->
	<script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-transition.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-alert.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-modal.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-tab.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-popover.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-button.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-typeahead.js"></script>	
	<script src="http://www.ucol.mx/cms/js/jquery.mobilemenu.js"></script>	
	<script src="http://www.ucol.mx/cms/js/jquery.liquidcarousel.js"></script>	
	<script src="http://www.ucol.mx/cms/js/jquery.slides.js"></script> 
	<script src="http://www.ucol.mx/cms/js/main.js"></script>
    <script src="http://www.ucol.mx/cms/js/custom.js"></script>
	</body>
</html>
