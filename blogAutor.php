<?php  
	include_once('php/conexion.php');
	$id=$_GET['id'];
	$id_p = mysql_escape_string($id);
	$sql_post = "SELECT * FROM post WHERE id_autor=$id_p";
    $sql_user = "SELECT A.id_autor,A.foto, A.id_usuario, A.resumen, U.id_usuario, U.nombre_completo, U.correo 
    				FROM autores as A, usuarios as U
    					WHERE A.id_usuario = U.id_usuario AND A.id_autor = $id_p";
   
    $data = new MySQL(SERVER,USER,PASSW,BD);
    $datosPost = $data -> consulta($sql_post);
    $datosUser = $data -> consulta($sql_user);

    $rPost = $data->fetch_assoc($datosPost);
    $rUser = $data->fetch_assoc($datosUser);

?>

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
		
	</div><!-- Termina Row p-superior -->

 <!-- Contenedor de solo un post -->
                 
    <div class="row p-contenido" id="formularios">
        <!-- Columna Izquierda-->  
        <div class="col-md-2 p-izquierda">
<?php  
    $numAutor = $data->num_rows($datosUser);
    if($numAutor!=0){
        do{
?>
            <div id="datosAutor">
            	<!-- Imagen de perfil del Autor  -->
                <div id="pImage" class="text-center"> 
                    <a href="#" class="thumbnail"><img src="<?php echo $rUser['foto'] ?>" class="img-circle" alt="myImage" style="width:150px; height:170px;"></a><hr>
                    <p class="text-primary" id="nombreAutor"><a href="">
                    <?php echo $rUser['nombre_completo'] ?></a></p>
                </div>
                <!-- Resumen del Autor -->
                <p class="text-center" id="aboutAutor">
                    <?php echo $rUser['resumen'] ?>
                </p>
                <!-- Datos de contacto del Autor -->
                <p class="text-center" data-toggle="tooltip" title="Da click para ver mis datos">
                Contáctame: <?php echo $rUser['correo'] ?></p>
            </div>
<?php 
        }while($rUser = $data->fetch_assoc($datosUser));
    }
?>
        </div><!-- Termina columna izquierda -->

 		<div class="col-md-7 p-centro">
			<!-- Contenedor de solo un post -->                
    		<div class="row p-contenido">
<?php  
    $numPost = $data->num_rows($datosPost);
    if($numPost){
        do{
?> 
            <div id="datosBlog">
            	<h3 id="tituloPost"><?php echo $rPost['titulo'] ?></h3>
              	<p class="text-justify" id="contenidoPost">
               		<?php echo $rPost['resumen'] ?>
              	</p>
            
              	<div class="text-left" id="enlacePost">
               	<p><a href="#">Enlace de video</a></p>
               	<p><a class="btn btn-primary postAutor" href='<?php echo "post.php?id=".$rPost["id_post"] ?>'>Seguir Leyendo...</a></p>
               	</div>
	               
               	<hr>
               	<!--<div id="etiquetasPost">
	                <p class="text-left"><span><img src=""> Tags: </span>
	        	        <span class="label label-primary"><a href="#">Medio Ambiente</a></span>
	            	    <span class="label label-warning"><a href="#">Agua</a></span>
	                    <span class="label label-success"><a href="#">Energia</a></span>
	                </p>
                	</div>-->
            </div><!-- Termina div datosPost -->  
<?php 
        }while($rPost = $data->fetch_assoc($datosPost));
    }
?>
			</div><!-- Fin contenido -->
								

		</div><!-- Termina div P-centro -->

        <!-- Columna Derecha -->             
        <div class="col-md-3 p-derecha">  
            <div id="categoriasPost">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Categorias</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Tecnologías</a></li>
                                <li><a href="#">Politica</a></li>
                                <li><a href="#">Salud</a></li>
                                <li><a href="#">Cientifico</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Termina columna derecha -->  
    </div><!-- Fin contenido Row P-contenido -->
	
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
        <?php require_once 'assets/scripts/udec.php' ?>
	</body>
</html>
