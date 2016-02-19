<!DOCTYPE html>
<html>
<head>
	<?php require_once("./estructura/head.php"); ?>
</head>
<body>
<div id="estructura">
<!-- //////////////////////////// -->
<header id="p-header">
	<div id="p-top">
		<div class="p-encabezado">
		<?php require_once("./estructura/header-body.php"); ?> 
		</div><!--encabezdo-->
	</div><!--top-->
</header>

<div class="container">
	<div class="row p-superior">
		<div class="col-md-11" style="text-align: right;">Name user</div>
		<div class="col-md-12 p-titulo">
			<h1>Apartado de Autor</h1>
		</div>

	<!-- Menú del autor -->	
	<div class="col-md-12 p-menu">
		<?php require_once("./estructura/menu-autor.php"); ?>
	</div>
	</div><!-- Termina row p-superior -->

<!-- /////////////Contenido//////////////// -->
<div class="row p-contenido">
	<div class="col-md-12">
		<?php require_once "miblog.php" ?>
	</div>
</div>

<!-- //////////////Termina contenido////////// -->
</div><!-- Termina div container -->
<div class="row p-inferior">
			<div class="col-md-12 p-content"></div>
		</div>
</div><!-- Termina Estructura -->

<footer id="p-footer"><!-- footer -->
	<?php require_once './estructura/footer.php' ?>
</footer>
<?php require_once './estructura/scripts.php' ?>

</body>
</html>