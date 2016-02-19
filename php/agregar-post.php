<?php  
	include_once("conexion.php");

	$idAutor = $_POST['id_autor'];
	$titulo = $_POST['titulo'];
	$resumen = $_POST['resumen'];
	$contenido = $_POST['contenido'];
	$img = $_POST['img'];
	$link = $_POST['link'];
	$etiqueta = $_POST['etiqueta'];


	if(empty($idAutor) || empty($titulo) || empty($resumen) || empty($contenido)){
?>
<div id="mensaje" class="alert alert-danger">
	<label>Error: No se puedo realizar la consulta. No se obtubieron los datos</label>
</div>
<?php 
	}else{
		$data = new MySql(SERVER,USER,PASSW,BD);
		$sql = "INSERT INTO post (id_autor, titulo, resumen, contenido, imagen, url_video,etiquetas) VALUES('$idAutor','$titulo','$resumen','$contenido','$img','$link','$etiqueta')";
		$result = $data->consulta($sql);
		if(!$result){
			?>
			<div id="mensaje" class="alert alert-danger">
				<label>Error: No se puedo realizar la consulta.</label>
			</div>
			<?php 
		}else{
			?>
			<div class="alert alert-success">
				<label>Registro guardado con exito</label>
			</div>
			<?php 
			//header('Location: ../autor/');
		}
	}

?>