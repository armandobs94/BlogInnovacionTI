<?php  
  //include_once('../php/conexion.php');
  //$id=$_GET['id'];
  //$id_p = mysql_escape_string($id);
?>
<!DOCTYPE html>
<html>
<style type="text/css">.noresize {resize: none; }
</style>
<head>
  <meta charset="utf-8">
  <title>Universidad de Colima</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link type="image/x-icon" href="http://www.ucol.mx/cms/img/favicon.ico" rel="icon" />
  <!-- styles -->
  <link href="http://www.ucol.mx/cms/css/bootstrap3.css" rel="stylesheet">
  <link href="http://www.ucol.mx/cms/headerfooterapp.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/menu-style.css">
  <script src="http://www.ucol.mx/cms/js/jquery.min.js"></script>   
</head>

<body>

<div id="estructura">
<header id="p-header">
  <div id="p-top">
    <div class="p-encabezado">
      <div class="linkUcol">
        <a class="escudo" href="http://www.ucol.mx/">&nbsp;</a>
        <a class="nombre" href="http://www.ucol.mx/">&nbsp;</a>
      </div>
      <div class="TituloDep"></div>
        <ul class="hidden-mobile" id="menu-header">
        <form action="http://www.ucol.mx/conocenos/buscar.htm" id="search-form" class="">
          <div class="input-append pull-right">
                <input type="hidden" value="008220538144971964399:mwxy_s7mt4u" name="cx">
            <input type="hidden" value="FORID:10" name="cof"> 
            <input type="hidden" value="UTF-8" name="ie"> 
                        <input id="q" class="search" name="q" type="text" placeholder="Buscar en ucol..." size="16">
            <input name="more" class="botonbuscar" value="" type="submit">
          </div>
        </form>
        <li><a href="http://www.ucol.mx/alumnos/" target="_blank">Alumnos</a></li>
        <li><a href="http://www.ucol.mx/trabajadores/" target="_blank">Trabajadores</a></li>
        </ul>   
    </div><!--encabezdo-->
  </div><!--top-->
</header>


<div class="container">

  <div class="row p-superior">
    <div class="col-md-12 p-menu">
      <ul>
        <li class="active"><a href="<?php echo "./index.php" ?>">Inicio</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" data-targert="#menuCat">
          Mis Post<span class="caret"></span></a>
          <ul class="dropdown-menu" id="menuCat">           
            <li class="disabled"><a class="categoria" href="<?php echo "nuevoPost.php"; ?>">Nuevo Post</a></li>
                <li><a class="categoria" href="#">Ver listado</a></li>
          </ul>
        </li>
        <li><a href="#">Reportes</a></li>
        <li><a href="<?php echo "misDatos.php" ?>">Mis Datos</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" data-targert="#menuUser">
          <img src="../assets/icons/exit2_7.png"><span class="caret"></span></a>
          <ul class="dropdown-menu" id="menuUser">
            <li><a  href="../index.php">Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- Termina menú -->
  </div><!-- Termina div Superior (aquí va el menú)-->

  <div class="row p-contenido">

   	  <div class="col-md-2 p-izquierda">
      </div><!-- Termina columna izquierda -->

      <div class="col-md-8 p-centro">
      <div id="mensaje"></div>
        <h4>Nuevo post</h4>      
      <div class="form">
        <div class="form-group">
    	     <label for="tituloPost" class="control-label">*Titulo de la publicación</label>
           <div class="error1">
      		    <input type="text" class="form-control" id="tituloPost" name="tituloPost" placeholder="Tu titulo...">
    	     </div>
  	    </div>

  	    <div class="form-group">
	         <label for="resumenPost" class="control-label">*Resumen de la publicación</label>
	         <div class="error2">
            <textarea class="form-control noresize" id="resumenPost" name="resumenPost" rows="6" placeholder="Tu resumen..."></textarea>
           </div>
  	    </div>

  	    <div class="form-group">
	         <label for="contenidoPost" class="control-label">*Contenido de la publicación</label>
	         <div class="error3">
            <textarea class="form-control noresize" id="contenidoPost" name="contenidoPost" rows="6" placeholder="Tu Pensamiento..."></textarea>
    	     </div>
  	    </div>

  	    <div class="form-group">
	         <label for="imagenPost" class="control-label">Imagen</label>
	         <div class="">
    	       <input type="file" id="imagenPost" name="imagenPost">
    	     </div>
  	    </div>

      	<div class="form-group">
	         <label for="linkPost" class="control-label">Link del video</label>
	         <div class="">
    	       <input type="text" class="form-control" id="linkPost" placeholder="Tu Link...">
    	     </div>
  	    </div>

  	    <div class="form-group">
	         <label for="etiquetaPost" class="control-label">Etiquetas</label>
	         <div class="">
    	       <input type="text" class="form-control" id="etiquetaPost" placeholder="Tus Etiquetas...">
    	     </div>
  	    </div>

        <button class="btn btn-success" onclick="valPost()">Enviar</button>    
        <a class="btn btn-danger" role="button" href="<?php echo "./index.php"; ?>">Cancelar</a>
      </div><!-- Termina Formulario -->
	    </div><!-- Termina columna central -->

    	<div class="col-md-2 p-derecha">
	    </div><!-- Termina columna izquierda -->
  </div><!-- Termina contenido -->

  <div class="row p-inferior">
    <div class="col-md-12 p-content"><br></div>
  </div>

</div><!-- Termina div Container -->
</div><!-- Termina div Estructura -->

    <footer id="p-footer"><!-- footer -->
      <div class="inner">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 mapa">
              <div class="address pull-right">
                <ul>
                  <li><i class="icon-address"></i><strong>Direcci&oacute;n:</strong> Av. Universidad No. 333, Las V&iacute;boras; CP 28040 Colima, Colima, M&eacute;xico</li>
                   <!--<li><i class="icon-email"></i><a href="/portal-web/Directorio.htm">Directorio</a></li>
                  <li><i class="icon-map"></i><a href="/conocenos/mapa.htm">Mapa del sitio</a></li>-->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="p-copyright">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="col-md-6 col-xs-6 izquierda">
                <a href='http://www.sep.gob.mx/' target="_blank"><img src="http://www.ucol.mx/cms/img/LogoSEP1.png"></a>
                <a href='http://www.anuies.mx/' target="_blank"><img src="http://www.ucol.mx/cms/img/anuies.png"></a>
                <a href='http://www.unesco.org/new/es/' target="_blank"><img src="http://www.ucol.mx/cms/img/unesco.png"></a>
                <a href='http://www.cumex.org.mx/' target="_blank"><img src="http://www.ucol.mx/cms/img/consorcio.png"></a>
              </div>
              <div class="col-md-6 col-xs-6 derecha">
                <a href='http://www.federaciondeestudiantescolimenses.com/' target="_blank"><img src="http://www.ucol.mx/cms/img/LogoFEC.png"  width="81px" height="30px" ></a>         
                &nbsp;<a href='#' target="_blank"><img src="http://www.ucol.mx/cms/img/SUTUC.png"></a>  
                &nbsp;<a href='http://portal.ucol.mx/feuc/'  target="_blank"><img src="http://www.ucol.mx/cms/img/LogoFEUC.png"></a>
                <!-- &nbsp;<a href='http://www.fundacionucol.org/' target="_blank"><img src="/cms/img/fundacionUcol.png"></a> -->
              </div>
            </div>
            <div class="col-md-12 derechos">&copy; Derechos Reservados 2013-2016 Universidad de Colima</div>
          </div>
        </div>
      </div>   
    </footer>
    <!--footer-->
    <!-- cierra footer-->
       <!-- javascript -->


<?php require_once './estructura/scripts.php' ?>


</body>
</html>
