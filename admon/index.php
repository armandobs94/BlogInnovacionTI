<!DOCTYPE html>
<html lang="es">
<head>
	<title>Administrador</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	require_once('privada/config.php');
 	echo "SECCION PUBLICA";
 	if($saml->isAuthenticated()) //Si el usuario ya esta autenticado en saml
	{	 
		$atributos= $saml->getAttributes(); //Obtener sus atributos
		$n = $atributos['uNombre'][0];
		$c = $atributos['uCorreo'][0];
?>
		<br><label>Bienvenido</label><label><?php echo " ".$n ?></label>
		<br><a href="privada/logout.php">Cerrar Sessión</a>
<?php  	  	
    }else{
    	echo "<br>No hay sesión iniciada<br><a href='./privada/'>Iniciar sesi&oacute;n</a>";
    } 
?>
<br>

</body>
</html>
