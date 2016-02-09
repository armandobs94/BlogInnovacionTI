<?php
    require_once('lib/php/conexion.php');
    require_once('lib/php/configuracion.php');
    $sql = "SELECT A.id_post,A.titulo, A.resumen, A.fecha,B.foto,B.id_usuario,C.nombre_completo FROM post as A, autores as B, usuarios as C WHERE A.estado = 4 AND A.id_autor = B.id_autor AND B.id_autor = C.id_usuario";
    $data = new HelperMySql(SERVER,USER,PASSW,BD);
    $co = $data -> query($sql); 
?>
<div id="comentarios">
<?php  foreach($co as $row):?>
    <div id="contenedor"><!-- Contenedor de solo un post -->                
        <div class="row p-contenido">
            <!-- Columna Izquierda-->  
            <div class="col-md-3 p-izquierda">
                <div id="pImage"> 
                    <a href="#" class="thumbnail"><img src="<?php echo $row['foto'] ?>" alt="myImage"></a>
                    <strong>Autor:</strong><a class="blogAutor" data-toggle="tooltip" title="Visita su perfil"> <?php echo $row['nombre_completo'] ?> </a>
                </div>
            </div><!-- Termina columna izquierda -->
            <!-- Columna Central -->
            <div class="col-md-7 p-centro">
                <!-- Titulo del post -->  
                <div id="pTitle">
                    <h3 class="text-left text-warning"> <?php echo $row['titulo'] ?> </h3>
                </div>

                <!-- Descripcion del post-->  
                <div  id="pDescription">
                    <p class="text-justify">
                    <strong>Resumen:</strong><br>
                        <?php echo $row['resumen'] ?>
                    </p>
                </div>

                <!-- Fecha del post-->  
                <div  id="pDate">
                   <p class="text-left">
                   <strong>Publicado el: </strong> <?php echo $row['fecha'] ?>
                   </p>
                </div>

                <!-- Link seguir leyendo del post-->  
                <div id="pLeyendo">
                    <p class="text-left">
                    <a class="btn btn-primary postAutor" id="<?php echo $row['id_post'] ?>">Seguir Leyendo...</a>
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
  <?php endforeach; ?>  
    <!-- Paginación -->
    <!-- <div id="pPaginacion">
            <ul class="pager">
                <li class="previous">
                <a href="#">&larr; Atrás</a>
                </li>
                <li class="next">
                <a href="#">Siguiente &rarr;</a>
                </li>
            </ul>
        </div --><!-- termina paginacion -->
    </div><!-- Fin comentarios-->
</div>