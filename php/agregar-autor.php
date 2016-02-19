<?php  
	include_once("conexion.php");

	$email = $_POST['correo'];
	$desc = $_POST['desc'];

	$mail = mysql_real_escape_string($email);
	$des = mysql_real_escape_string($desc);


	if(empty($mail) || empty($des)){
?>		
		<div id="mensaje" class="alert alert-danger">
				Error: No se puedo realizar la consulta.
		</div>
<?php 			
	}else{

		$sqlUsuario = "INSERT INTO usuarios(correo,usuario_tipo) VALUES ('$mail','USR')";
		$sqlU = "SELECT id_usuario from usuarios WHERE usuario_tipo = 'USR' AND correo = '$mail'";
		$data = new MySql(SERVER,USER,PASSW,BD);
    	$rUsuario = $data -> consulta($sqlUsuario);
		if(!$rUsuario){
?>			
			<div id="mensaje" class="alert alert-danger">
				Error: No se puedo realizar la consulta.
			</div>	
<?php 			
		}else{
			$sID = $data->consulta($sqlU);
			$verID=$data->fetch_assoc($sID);
			do{
				$idU=$verID['id_usuario'];
			}while($data->fetch_assoc($sID));
			$sqlAutor = "INSERT INTO autores(id_usuario,resumen) VALUES ('$idU','$desc')";
			$rAutor = $data->consulta($sqlAutor);
			if(!$rAutor){
?>
			<div id="mensaje" class="alert alert-danger">
				Error: No se puedo realizar la consulta.
			</div>	
<?php 
			}else{
?>	
			<div id="mensaje" class="alert alert-success">		
				Registro guardado de forma exitosa. Puede acceder con su cuenta universitaria 
				en el siguiente enlace.
				<a href="./autor/">Entrar como autor</a>
			</div>		
<?php 		
			}
		}
	}
?>