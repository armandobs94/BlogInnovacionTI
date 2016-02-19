<?php 
    require_once '../php/conexion.php'; 
    $correo = "armandobs94@gmail.com";
    // $cc = mysqli_escape_string($correo); 
    //armandobs94@gmail.com
    //luiyii94coty@gmail.com
    $query = "SELECT P.id_post,P.id_autor,P.titulo, P.resumen,P.fecha,U.correo,U.nombre_completo,A.foto FROM post as P, usuarios as U, autores as A WHERE P.id_autor=A.id_autor AND A.id_usuario = U.id_usuario 
    AND U.correo = '$correo'";

    $data = new MySQL(SERVER,USER,PASSW,BD);
    $post = $data->consulta($query);
    $registros = $data->fetch_array($post);

    $num = $data->num_rows($post);
?>
<div class="col-md-2 p-izquierda">
    <div id="pImage"> 
    <img class="img-responsive thumbnail" src="<?php echo "../".$registros['foto'] ?>" alt="myImage">
        <p class="text-center">
            <strong>¡Bienvenido!</strong><br>
            <span class="blogAutor"><?php echo $registros['nombre_completo'] ?></span>
        </p>
    </div>
</div><!-- Termina columna izquierda-->

<div class="col-md-7 p-centro">
    <div class="alert alert-success" role="alert"><p class="text-center"></p></div>
    <?php  
        if($num!=0){
        do {
    ?>
    
    <!-- Titulo del post -->  
    <div id="pTitle">
        <h3 class="text-left text-warning"> <label><?php echo $registros['titulo'] ?></label> </h3>
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
    <strong>Publicado el: </strong>
        <label><?php echo $registros['fecha'] ?></label>
    </p>
    </div>

    <!-- Link seguir leyendo del post-->  
    <div id="pLeyendo">
    <p class="text-left">
        <a class="btn btn-primary postAutor" href='<?php echo "miPost.php?id=".$registros["id_post"] ?>'>Seguir Leyendo...</a>
    </p>
    </div>
     
    <!-- Fecha del post
    http://blog.aulaformativa.com/plugin-jquery-para-anadir-sistema-de-calificacion/   -->  
    <div id="pRatestrellas">
    </div>
    <?php  
        }
        while($registros=$data->fetch_array($post));
    }
    ?>  
    </div><!-- Termina columna central -->  

    <div class="col-md-3 p-derecha">
    </div><!-- Termina columna derecha -->  

<hr>
