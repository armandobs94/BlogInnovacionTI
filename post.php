<?php  
    include_once('php/conexion.php');
    $id=$_GET['id'];
    $id_p = mysql_escape_string($id);
    $sql = "SELECT 
    A.id_post,A.titulo, A.resumen as resumen_p,A.contenido, A.fecha, A.url_video,
    B.foto,B.id_usuario, B.resumen, B.id_autor,
    C.nombre_completo, C.correo 
FROM 
    post as A, autores as B, usuarios as C 
WHERE 
    A.id_post='$id_p' AND A.estado=1 AND A.id_autor = B.id_autor AND B.id_usuario = C.id_usuario";
    $data = new MySql(SERVER,USER,PASSW,BD);

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
    <div class="col-md-12 p-titulo"><h1>Blog de InnovaciÃ³n y TI.</h1></div>
        <div class="col-md-12 p-menu">
             <?php require_once 'assets/menus/general.php' ?>
        </div><!-- Termina menÃº -->
        
    </div><!-- Termina Row p-superior -->

<?php  
        $cPost = $data->consulta($sql);
        $post=$data->fetch_assoc($cPost);
        $numP=$data->num_rows($cPost);
        if($numP!=0){
            do{     
?>
    <div class="row p-contenido">
        <div class="col-md-2 p-izquierda">
            <div id="datosAutor">
                <!-- Imagen de perfil del Autor -->
                <div id="pImage" class="text-center"> 
                    <a href="#" class="thumbnail"><img src="<?php echo $post['foto'] ?>" class="img-circle" alt="myImage" style="width:150px; height:170px;"></a><hr>
                    <p class="text-primary" id="nombreAutor"><a class="blogAutor" data-toggle="tooltip" title="Visita su perfil" href="blogAutor.php?id=<?php echo $post['id_autor']; ?>"> 
                    <?php echo $post['nombre_completo'] ?></a></p>
                </div>
                <!-- Resumen del Autor -->
                <p class="text-center" id="aboutAutor">
                    <?php echo $post['resumen'] ?>
                </p>
                <!-- Datos de contacto del Autor -->
                <p class="text-center" data-toggle="tooltip" title="Da click para ver mis datos">
                    ContÃ¡ctame: <label> <?php echo $post['correo'] ?> </label>
                </p>
            </div>
        </div><!-- Termina Columna Izquierda -->
        
<div class="col-md-8 p-centro">
    <div id="contenedor_t">
    <!-- CONTENIDO AQUI -->
    
        <!-- Contenedor de un solo post -->                
        <div class="row p-contenido">

            <div>
        <div id="datosPost">
            <!-- Titulo del post -->
            <h3 id="tituloPost"><?php echo $post['titulo'] ?></h3>
            <p class="text-justify" id="contenidoPost">
                <?php echo $post['contenido'] ?>
            </p>         
            <!-- Enlace de video del post -->       
            <p class="text-left" id="enlacePost"><a href="#">Enlace de video</a></p>
            <hr>
                <div id="etiquetasPost">
                    <p class="text-left"><span><img src="assets/icons/label49.png"> Tags: </span>
                    <span class="label label-primary"><a href="#">Medio Ambiente</a></span>
                    <span class="label label-warning"><a href="#">Agua</a></span>
                    <span class="label label-success"><a href="#">Energia</a></span>
                    </p>
                </div>
        <!-- TERMINA CONTENIDO POST -->        

        <div id="comentarios">
            <!-- Formulario para comentarios -->
            <div class="well">
                <h4>Escribe un comentario:</h4>
                <form role="form">
                    <div class="form-group">
                    <textarea class="form-control noresize" rows="3"></textarea>
                    </div>
                    <!-- <button type="submit" class="btn btn-primary">Enviar</button> -->
                    <label class="btn btn-primary">Enviar</label>
                    </form>
                </div>
                <hr>

                <?php  
                    $sq = "SELECT * FROM comentarios WHERE id_post='$id_p' AND estado = 1";
                    $coment = $data -> consulta($sq);
                    $mostrar = $data -> fetch_assoc($coment);
                    $numC = $data->num_rows($coment);
                    if($numC!=0){
                        do{
                ?>

        <!-- Comentarios de usuarios -->
        <div class="media">
            <a class="pull-left" href="#">
            <img class="media-object" src="http://placehold.it/64x64" alt=""></a>
                        
            <div class="media-body">
            <!-- ESTO ES PARA REPORTAR EL COMENTARIO-->
                <div class="reportarC col-md-offset-3">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret red"></b></a>
                            <ul class="dropdown-menu">
                               <li><a href="#">Reportar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            <!-- Fecha del post -->
            <h4 class="media-heading"><small><?php echo $mostrar['horario'] ?></small></h4>
            <p class="text-justify">
                <?php echo $mostrar['comentario'] ?>
                </p>
            </div><!-- Contenido de Comentarios -->
        </div><!-- Termina div contenedor de comentarios -->
        <?php 
                }while($mostrar = $data -> fetch_assoc($coment));
            }
        ?>                    
    </div><!-- Termina div COMENTARIOS -->
        </div><!-- Termina div datosPost -->  
    </div>
</div><!-- Fin contenido -->
<hr>
<?php 
        }while($post=$data->fetch_assoc($cPost));
    }
?>                  


    </div><!-- Termina div Contenido_t -->
</div><!-- Termina div P-centro -->


<div class="col-md-2 p-derecha">
<!-- Blog Categories Well -->
    <div class="well">
    <h4>Categorias</h4>
    
        <div class="row">
            <div class="col-lg-6">
            <ul class="list-unstyled">
                <li><a href="#">Tecnologias</a></li>
                <li><a href="#">Politica</a></li>
                <li><a href="#">Salud</a></li>
                <li><a href="#">Cientifico</a></li>
            </ul>
            </div>
        </div>
    </div>
</div>
</div><!-- Termina row p-contenido -->
    
    <div class="row p-inferior">
        <div class="col-md-12 p-content"></div>
    </div>
</div><!-- Termina div Container -->

<!--////////////////////////////////////////////////////////////////////PIE///////////////////////////////////////////////////////////////////////-->       
</div><!--estructura-->
        <footer id="p-footer"><!-- footer -->
            <?php require_once 'assets/pie-pagina/udec.php' ?>
        </footer>
        <!--footer-->
        <!-- cierra footer-->
       <!-- javascript -->
<?php require_once 'assets/scripts/udec.php' ?>
    
    </body>
</html>
