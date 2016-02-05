<?php
    date_default_timezone_set("America/Mexico_City");
    $hora = date("H:i:s");
    $fecha = date("Y-m-d");
    #include_once("../../php/conexion.php");
    $id_post="";
    $ruta ="pages/autorPost.php?id=".$id_post;
    $title = "Roflmao cachorros";
    $resumen = "text textdomain( texttexttexttexttexttexttexttexttexttexttexttexttexttext
        texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
        texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
        texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext)
text textdomain( texttexttexttexttexttexttexttexttexttexttexttexttexttext
        texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
        texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
        texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext
        http_negotiate_language(supported)
        fkwjef headers_list(oid)";

    $url_img="images/developers/yoop.jpg";
    $name_autor="Alberto Alonzo";

?>


<div id="comentarios">

    <div id="contenedor"> <!-- Contenedor de solo un post -->    
        <div class="row p-contenido">

            <!-- Columna Izquierda-->  
            <div class="col-md-3 p-izquierda">
                <div id="pImage"> 
                    <a href="#" class="thumbnail"><img src="<?php echo $url_img ?>" alt="myImage"></a>
                    <strong>Autor:</strong><a class="blogAutor" data-toggle="tooltip" title="Visita su perfil"> <?php echo $name_autor ?></a>
                </div>
            </div><!-- Termina columna izquierda -->

            <!-- Columna Central -->
            <div class="col-md-7 p-centro">

                <!-- Titulo del post -->  
                <div id="pTitle">
                    <h3 class="text-left text-warning"><?php echo $title ?> </h3>
                </div>

                <!-- Descripcion del post-->  
                <div  id="pDescription">
                    <p class="text-justify">
                    <strong>Descripción:</strong><br>
                        <?php echo $resumen ?>
                    </p>
                </div>

                <!-- Fecha del post-->  
                <div  id="pDate">
                   <p class="text-left">
                   <strong>Publicado el: </strong> <?php echo $fecha. " ". $hora ?>
                   </p>
                </div>

                <!-- Link seguir leyendo del post-->  
                <div id="pLeyendo">
                    <p class="text-left">
                    <a class="btn btn-primary continuarPost" href="">Seguir Leyendo...</a>
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
