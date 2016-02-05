<!DOCTYPE html>
<html>
        <script type="text/javascript" src="js/funciones.js"></script>


<body>
	<div id="contenedor">

         <div class="col-md-12 p-menu">
                <ul class="nav nav-tabs">
                  <li role="presentation" class="active"><a href="http://localhost/Costume/"><img src="images/home78.png"></a></li>
                  <li role="presentation" id="nuevo"><a>Nuevo Post</a></li>
                  <li role="presentation" id="reportes"><a>Reportes</a></li>
                  <li role="presentation" id="datos"><a>Mis datos</a></li>       
                </ul>
            </div>
<!-- <div class="alert alert-success" role="alert"><h2 class="text-center">CUAK!</h2></div> -->

    <!-- Contenedor de solo un post -->                
    <div class="row p-contenido" id="contenidoAutor">
    	
     
  <?php 
  include_once('autorPrincipal.php');
            ?>




        <!-- Columna Izquierda-->  
        <div class="col-md-3 p-izquierda">

        </div><!-- Termina columna izquierda -->

        <!-- Columna Central -->
        <div class="col-md-6 p-centro">
 



















        </div><!-- Termina columna central -->  

        <!-- Columna Derecha -->             
        <div class="col-md-3 p-derecha">     
        </div><!-- Termina columna derecha -->  

        </div><!-- Fin contenido -->
        <hr>

    </div><!-- Fin contenedor-->

</body>
</html>