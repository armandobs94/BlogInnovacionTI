<?php
    date_default_timezone_set("America/Mexico_City");
    $hora = date("H:i:s");
    $fecha = date("Y-m-d");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
</head>
<body>

<div id="comentarios">

    <div id="contenedor">
    <!-- Contenedor de solo un post -->                
        <div class="row p-contenido">

            <!-- Columna Izquierda-->  
            <div class="col-md-3 p-izquierda">
                <div id="pImage"> 
                    <a href="#" class="thumbnail"><img src="images/developers/yoop.jpg" alt="myImage"></a>
                    <strong>Autor:</strong><a class="blogAutor" data-toggle="tooltip" title="Visita su perfil"> Alberto Alonzo</a>
                </div>
            </div><!-- Termina columna izquierda -->

            <!-- Columna Central -->
            <div class="col-md-7 p-centro">

                <!-- Titulo del post -->  
                <div id="pTitle">
                    <h3 class="text-left text-warning">Roflmao cachorros</h3>
                </div>

                <!-- Descripcion del post-->  
                <div  id="pDescription">
                    <p class="text-justify">
                    <strong>Descripción:</strong><br>
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    </p>
                </div>

                <!-- Fecha del post-->  
                <div  id="pDate">
                   <p class="text-left">
                   <strong>Publicado el: </strong> <?php echo $fecha; ?>
                   </p>
                </div>

                <!-- Link seguir leyendo del post-->  
                <div id="pLeyendo">
                    <p class="text-left">
                    <a class="btn btn-primary continuarPost">Seguir Leyendo...</a>
                    </p>
                </div>

                <!-- Fecha del post
                http://blog.aulaformativa.com/plugin-jquery-para-anadir-sistema-de-calificacion/
                -->  
                <div id="pRatestrellas">

                </div>

            </div><!-- Termina columna central -->  

            <!-- Columna Derecha -->             
            <div class="col-md-2 p-derecha">
                
            </div><!-- Termina columna derecha -->  
        </div><!-- Fin contenido -->

        <hr>
    </div><!-- Fin contenedor-->

    <!-- 2DO POST-->
    <div id="contenedor">
    <!-- Contenedor de solo un post -->                
        <div class="row p-contenido">

            <!-- Columna Izquierda-->  
            <div class="col-md-3 p-izquierda">
                <div id="pImage"> 
                    <a href="#" class="thumbnail"><img src="images/developers/marvar.jpg" alt="myImage"></a>
                    <strong>Autor:</strong><a class="blogAutor" data-toggle="tooltip" title="Visita su perfil"> Martin Vargas</a>
                </div>
            </div><!-- Termina columna izquierda -->

            <!-- Columna Central -->
            <div class="col-md-7 p-centro">

                <!-- Titulo del post -->  
                <div id="pTitle">
                    <h3 class="text-left text-warning">Green Melody</h3>
                </div>

                <!-- Descripcion del post-->  
                <div  id="pDescription">
                    <p class="text-justify">
                    <strong>Descripción:</strong><br>
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    </p>
                </div>

                <!-- Fecha del post-->  
                <div  id="pDate">
                   <p class="text-left">
                   <strong>Publicado el: </strong> <?php echo $fecha; ?>
                   </p>
                </div>

                <!-- Link seguir leyendo del post-->  
                <div id="pLeyendo">
                    <p class="text-left">
                    <a class="btn btn-primary continuarPost">Seguir Leyendo...</a>
                    </p>
                </div>

                <!-- Fecha del post
                http://blog.aulaformativa.com/plugin-jquery-para-anadir-sistema-de-calificacion/
                -->  
                <div id="pRatestrellas">

                </div>

            </div><!-- Termina columna central -->  

            <!-- Columna Derecha -->             
            <div class="col-md-2 p-derecha">
                
            </div><!-- Termina columna derecha -->  
        </div><!-- Fin contenido -->

        <hr>
    </div><!-- Fin contenedor-->

    <!-- 3ER POST-->
    <div id="contenedor">
    <!-- Contenedor de solo un post -->                
        <div class="row p-contenido">

            <!-- Columna Izquierda-->  
            <div class="col-md-3 p-izquierda">
                <div id="pImage"> 
                    <a href="#" class="thumbnail"><img src="images/developers/kirito.jpg" alt="myImage"></a>
                    <strong>Autor:</strong><a class="blogAutor" data-toggle="tooltip" title="Visita su perfil"> Heriberto Flores</a>
                </div>
            </div><!-- Termina columna izquierda -->

            <!-- Columna Central -->
            <div class="col-md-7 p-centro">

                <!-- Titulo del post -->  
                <div id="pTitle">
                    <h3 class="text-left text-warning">Roflmao cachorros</h3>
                </div>

                <!-- Descripcion del post-->  
                <div  id="pDescription">
                    <p class="text-justify">
                    <strong>Descripción:</strong><br>
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    texto texto texto texto texto texto texto texto texto texto
                    </p>
                </div>

                <!-- Fecha del post-->  
                <div  id="pDate">
                   <p class="text-left">
                   <strong>Publicado el: </strong> <?php echo $fecha; ?>
                   </p>
                </div>

                <!-- Link seguir leyendo del post-->  
                <div id="pLeyendo">
                    <p class="text-left">
                    <a class="btn btn-primary continuarPost">Seguir Leyendo...</a>
                    </p>
                </div>

                <!-- Fecha del post
                http://blog.aulaformativa.com/plugin-jquery-para-anadir-sistema-de-calificacion/
                -->  
                <div id="pRatestrellas">

                </div>

            </div><!-- Termina columna central -->  

            <!-- Columna Derecha -->             
            <div class="col-md-2 p-derecha">
                
            </div><!-- Termina columna derecha -->  
        </div><!-- Fin contenido -->

        <hr>
    </div><!-- Fin contenedor-->

        <!-- Paginación -->
        <div id="pPaginacion">
        <ul class="pager">
            <li class="previous">
            <a href="#">&larr; Atrás</a>
            </li>
            <li class="next">
            <a href="#">Siguiente &rarr;</a>
            </li>
        </ul>
        </div>
</div><!-- Fin comentarios-->
</body>
</html>