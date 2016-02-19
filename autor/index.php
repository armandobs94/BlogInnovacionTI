<<<<<<< HEAD
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
=======
<?php  
	require_once '../php/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Mis publicaciones</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	require_once('privada/config.php');
	$saml ->requireAuth();
 	// echo "SECCION PUBLICA<br>";
 	if($saml->isAuthenticated()) //Si el usuario ya esta autenticado en saml
	{	 
		$atributos= $saml->getAttributes(); //Obtener sus atributos
		$nombre = $atributos['uNombre'][0];
		$correo = $atributos['uCorreo'][0];
		$sq = "SELECT COUNT(*) AS total FROM usuarios AS A, autores AS B WHERE A.correo='$correo' AND 
		A.id_usuario = B.id_usuario";
		$data = new HelperMySql(SERVER,USER,PASSW,BD);
    	$co = $data -> query($sq);
    	foreach($co as $row):
    		$num = $row['total'];
    	endforeach;			
		if($num!=1){
 			echo "Bienvenido: ".$nombre."<br>";
			echo "<label>"."No tiene permisos para entrar a este apartado."."</label>";
			echo '<br><a href="privada/logout.php">Cerrar Sessión</a>';
		}else{
?>
			<label>Bienvenido</label><label><?php echo " ".$nombre ?></label>
			<br><a href="privada/logout.php">Cerrar Sessión</a>
<!-- Si esta logueado se muestra aqui el contenido -->

<!-- Fin contenido -->
<?php 			
		} 	  	
    }else{
?>    	
    	<!-- Si no esta logueado se le pide iniciar session -->
    	<br>No hay sesión iniciada<br><a href='./privada/'>Iniciar sesi&oacute;n</a>
<?php
    } 
?>
<br>

</body>
</html>
>>>>>>> origin/master
