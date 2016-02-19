<?php  
	require_once '../php/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Moderador</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	require_once('privada/config.php');
 	// echo "SECCION PUBLICA<br>";
 	if($saml->isAuthenticated()) //Si el usuario ya esta autenticado en saml
	{	 
		$atributos= $saml->getAttributes(); //Obtener sus atributos
		$nombre = $atributos['uNombre'][0];
		$correo = $atributos['uCorreo'][0];
		$sq = "SELECT COUNT(*) AS total FROM usuarios AS A, usuarios_tipo AS B WHERE A.correo='$correo' 
		AND A.usuario_tipo = 'AD2' and A.usuario_tipo = B.id_tipo";
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
<?php 			
		} 	  	
    }else{
    	echo "<br>No hay sesión iniciada<br><a href='./privada/'>Iniciar sesi&oacute;n</a>";
    } 
?>
<br>

</body>
</html>
