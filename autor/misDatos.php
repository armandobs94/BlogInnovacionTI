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
  <script type="text/javascript" src="../js/funcionesAutor.js"></script>
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

<div id="container">
    <div class="row p-superior">
        <div class="col-md-12 p-menu">
            <ul>
                <li class="active"><a href="<?php echo "./index.php"; ?>">Inicio</a></li>
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" data-targert="#menuCat">
                    Mis Post<span class="caret"></span></a>
                    <ul class="dropdown-menu" id="menuCat">                     
                        <li><a class="categoria" href="<?php echo "nuevoPost.php"; ?>">Nuevo Post</a></li>
                        <li><a class="categoria" href="#">Ver listado</a></li>
                    </ul>
                </li>
                <li><a href="#">Reportes</a></li>
                <li><a href="<?php echo "misDatos.php"; ?>">Mis Datos</a></li>
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
        <div class="alert alert-danger" role="alert"><p class="text-left">Formulario: Mis Datos Personales</p></div>
 
            <form role="form" id="formudata" enctype="multipart/form-data">
            <div class="form-group">
                <label for="aboutme" class="control-label">Acerca de mi</label>
                <div class="error1">
                    <textarea class="form-control noresize" rows="10" placeholder="Algo..." id="aboutme" maxlength="1000" onKeyDown="cuenta()" onKeyUp="cuenta()" required></textarea>
                    <input class="form-control" type="text" id="cantidad" value="1000" disabled>
                </div>
            </div>

            <div class="form-group">
                <label for="imagenPost" class="control-label">Imagen</label>
                <div class="">
                    <input type="file" id="imagenPost">
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-danger" role="button" href="./index.php">Cancelar</a>
            </div>
            <hr>
            </form>          
        </div><!-- Termina columna central -->  

        <div class="col-md-2 p-derecha">
        </div><!-- Termina columna derecha -->  

    </div><!-- Termina row p-contenido -->
    <hr>

    <div class="row p-inferior">
        <div class="col-md-12 p-content"><br></div>
    </div>
</div><!-- Termina Container -->
</div><!-- Termina Estructura -->

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

  <!--<script src="/js/jquery-1.7.2.min.js"></script>
  
  <script src="/js/superfish.js"></script>
  <script src="/js/jquery.mobilemenu.js"></script>
  <script src="/js/jquery.tweet.js"></script>
  <script src="/js/jquery.flexslider.js"></script>
    <script src="/js/custom.js"></script>  -->
  <!--<script src="/cms/js/bootstrap/js/bootstrap.min.js"></script> -->
  <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-transition.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-alert.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-modal.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-tab.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-popover.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-button.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-collapse.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-carousel.js"></script>
    <script src="http://www.ucol.mx/cms/js/bootstrap/js/bootstrap-typeahead.js"></script> 
  <script src="http://www.ucol.mx/cms/js/jquery.mobilemenu.js"></script>  
  <script src="http://www.ucol.mx/cms/js/jquery.liquidcarousel.js"></script>  
  <script src="http://www.ucol.mx/cms/js/jquery.slides.js"></script> 
  <script src="http://www.ucol.mx/cms/js/main.js"></script>
  <script src="http://www.ucol.mx/cms/js/custom.js"></script>

</body>
</html>