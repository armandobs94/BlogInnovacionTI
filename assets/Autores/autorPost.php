<?php
    date_default_timezone_set("America/Mexico_City");
    $hora = date("H:i:s");
    $fecha = date("Y-m-d");

?>

<!DOCTYPE html>
<html>
<script type="text/javascript" src="js/funciones.js"></script>
<body>
<div class="row p-superior">
        <div class="col-md-12 p-titulo"><h1>Blog de Innovacion y TI</h1></div>
        <div class="col-md-12 p-menu">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="">Inicio</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown"><img src="img/gral/man42.png"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a id="newAutor">Registro</a></li>
                                    <li><a id="loginAutor">Login</a></li>
                                </ul>
                                </li>
                            <li><a id="fechasDestacadas">Fechas Destacadas</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown">Recientes<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a id="recientePost">Post</a></li>
                                    <li><a id="recienteComent">Comentarios</a></li>
                                </ul>
                                </li>
                            <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Categorias<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="categoria">Medio Ambiente</a></li>
                                    <li><a class="categoria">Tecnología</a></li>
                                    <li><a class="categoria">Politica</a></li>
                                    <li><a class="categoria">Ciencia</a></li>
                                    <li><a class="categoria">Salud</a></li>
                                </ul>
                                </li>
                            <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Como Publicar<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a id="publicarTuto">Seguimiento</a></li>
                                    <li><a id="publicarPolitica">Politicas de Privacidad</a></li>
                                </ul>
                                </li>
                            <li><a id="acercaDe">Acerca de</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div><!-- Termina Menú -->
        <!--<div class="col-md-12 p-sesion"><b>Pedro Fernández Palominos</b> | <a href="#">SALIR</a></div>-->
    </div>
	<div id="contenedor">
    <!-- Contenedor de solo un post -->                
    <div class="row p-contenido">
        <!-- Columna Izquierda-->  
        <div class="col-md-3 p-izquierda">
            <div id="datosAutor">
                <div id="pImage" class="text-center"> 
                    <img src="img/dev/yoop.jpg" class="img-circle" alt="myImage" style="width:150px; height:170px;"><hr>
                    <p class="text-primary" id="nombreAutor"><a class="blogAutor" data-toggle="tooltip" title="Visita su perfil"> Alberto Alonzo</a></p>
                </div>
                <p class="text-justify" id="aboutAutor">
                    Esta es una pequeña descripcion acerca de mi
                    Esta es una pequeña descripcion acerca de mi
                    Esta es una pequeña descripcion acerca de mi
                    Esta es una pequeña descripcion acerca de mi
                    Esta es una pequeña descripcion acerca de mi
                </p>
                <p class="text-left" data-toggle="tooltip" title="Da click para ver mis datos">Contáctame!</p>
            </div>
        </div><!-- Termina columna izquierda -->

        <!-- Columna Central -->
        <div class="col-md-7 p-centro">
            <div id="datosPost">
                <h3 id="tituloPost">Titulo del post</h3>
                <p class="text-justify" id="contenidoPost">
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                    Esto es el contenido del post del autor.
                </p>
                <p class="text-left" id="enlacePost"><a href="#">Enlace de video</a></p>
                <hr>
                <div id="etiquetasPost">
                    <p class="text-left"><span><img src="img/gral/label49.png"> Tags: </span>
                    <span class="label label-primary"><a href="#">Medio Ambiente</a></span>
                    <span class="label label-warning"><a href="#">Agua</a></span>
                    <span class="label label-success"><a href="#">Energia</a></span>
                    </p>
                </div>
        <div id="comentarios">
                <!-- Formulario para comentarios -->
                <div class="well">
                    <h4>Escribe un comentario:</h4>
                    <form role="form">
                        <div class="form-group">
                            <textarea class="form-control noresize" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>

                <hr>

                <!-- Comentarios de usuarios -->
                     <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="http://placehold.it/64x64" alt="">
                        </a>
                        <div class="media-body">
                            <!-- ESTO ES PARA REPORTAR EL COMENTARIO 
                            <div class="reportarC col-md-offset-4">
                                <a role="button" class="dropdown-toggle" data-toggle="dropdown"><span class="caret red"></span></a>
                                <ul class="dropdown-menu-right" role="menu">
                                    <li><a >Reportar</a></li>
                                </ul>
                            </div>-->
                            <!-- -->
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

                            <h4 class="media-heading">
                                <small><?php echo $fecha." a las ".$hora ?></small>
                            </h4>
                            <p class="text-justify">
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. 
                                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                 Donec lacinia congue felis in faucibus.
                            </p>
                        </div>
                    </div>
                <!-- Comentarios de usuarios -->
                 <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <small><?php echo $fecha." a las ".$hora ?></small>
                        </h4>
                        <p class="text-justify">
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. 
                            Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                             Donec lacinia congue felis in faucibus.
                        </p>
                    </div>
                </div>
                    <!-- Nested Comment -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placehold.it/64x64" alt="">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Nested Start Bootstrap
                                    <small>August 25, 2014 at 9:30 PM</small>
                                </h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                        </div>

            </div>
        </div><!-- Termina columna central -->  
    </div>
        <!-- Columna Derecha -->             
        <div class="col-md-2 p-derecha">  
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

    </div><!-- Fin contenido -->
    <hr>
</div><!-- Fin contenedor-->

</body>
</html>