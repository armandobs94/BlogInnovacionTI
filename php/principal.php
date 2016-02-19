<?php
    require_once('conexion.php');
    $sql = "SELECT A.id_autor,A.id_post,A.titulo, A.resumen, A.fecha,B.foto,B.id_usuario,C.nombre_completo, C.id_usuario
    FROM post as A, autores as B, usuarios as C WHERE A.estado=1  AND A.id_autor = B.id_autor AND B.id_usuario = C.id_usuario";
    $data = new MySQL(SERVER,USER,PASSW,BD);
    $obtener = $data -> consulta($sql);
    $registros = $data ->fetch_assoc($obtener);
    $num = $data->num_rows($obtener);
?>
<div id="comentarios">
<?php  
    if($num!=0){
        do{

?>
    <div id="contenedor"><!-- Contenedor de solo un post -->                
        <div class="row p-contenido">
            <!-- Columna Izquierda-->  
            <div class="col-md-2 p-izquierda">
                <div id="pImage"> 
                    <img class="img-responsive thumbnail" src="<?php echo $registros['foto'] ?>" alt="myImage">
                    <p class="text-center">
                        <p class="text-center">
                        <strong>Autor</strong><br>
                        <a class="blogAutor" data-toggle="tooltip" title="Visita su perfil" href="<?php echo "blogAutor.php?id=".$registros["id_autor"] ?>"> 
                        <?php echo $registros['nombre_completo'] ?></a>
                        </p>
                    </p>
                </div>
            </div><!-- Termina columna izquierda -->
            <!-- Columna Central -->
            <div class="col-md-7 p-centro">
                <!-- Titulo del post -->  
                <div id="pTitle">
                    <h3 class="text-left text-warning"> <?php echo $registros['titulo'] ?> </h3>
                </div>

                <!-- Descripcion del post-->  
                <div  id="pDescription">
                    <p class="text-justify">
                    <strong>Resumen:</strong><br>
                        <?php echo $registros['resumen'] ?>
                    </p>
                </div>

                <!-- Fecha del post-->  
                <div  id="pDate">
                   <p class="text-left">
                   <strong>Publicado el: </strong> <?php echo $registros['fecha'] ?>
                   </p>
                </div>

                <!-- Link seguir leyendo del post-->  
                <div id="pLeyendo">
                    <p class="text-left">
                    <a class="btn btn-primary postAutor" href='<?php echo "post.php?id=".$registros["id_post"] ?>'>Seguir Leyendo...</a>
                    </p>
                </div>

                <!-- Fecha del post
                http://blog.aulaformativa.com/plugin-jquery-para-anadir-sistema-de-calificacion/
                -->  
                <div id="pRatestrellas">

                </div>

            </div><!-- Termina columna central -->  

            <!-- Columna Derecha -->             
            <div class="col-md-3 p-derecha">
                
            </div><!-- Termina columna derecha -->  
        </div><!-- Fin contenido -->

        <hr>
    </div><!-- Fin contenedor-->
  <?php  
        }while($registros=$data->fetch_assoc($obtener));
    }
  ?>  
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