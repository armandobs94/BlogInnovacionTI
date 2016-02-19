<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require_once 'assets/encabezados/udec.php' ?>
  </head>
<style type="text/css">
.noresize {resize: none;
}
</style>
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
<div class="col-md-12 p-titulo"><h1>Nuevo autor</h1></div>
<div class="col-md-12 p-menu">
  <?php require_once 'assets/menus/general.php' ?>
</div>
</div>
<div class="row p-contenido">
<div class="col-md-2 p-izquierda">
  </div>
  <div class="col-md-7 p-centro">
    
    <div id="listado"class="form">
    <div id="mensaje"></div>
      <div class="form-group">
        <label>email</label>
        <input type="email" name="correo" id="correo" placeholder="introduce tu correo:" class="form-control"></input>  
      </div>
      <div class="form-group">
        <label>Sobre mí</label>
        <textarea id="sobre" name="sobre" class="form-control noresize" rows="10" placeholder="Ingresa algo sobre ti..."></textarea>
      </div>
      <div class="form-group">
        <button id="registro" onclick="valDatos()">registrarme</button>
        <a class="btn btn-danger" role="button" id="cancelRegistro" href="./index.php">Cancelar</a>
      </div>
    </div>
</div>
<div class="col-md-3 p-derecha">
</div>
</div>
<div class="row p-inferior">
<div class="col-md-12 p-content"></div>
</div>
</div>

<!--////////////////////////////////////////////////////////////////////PIE///////////////////////////////////////////////////////////////////////-->   
</div><!--estructura-->
    <footer id="p-footer"><!-- footer -->
      <?php require_once 'assets/pie-pagina/udec.php' ?>
    </footer>
    <!--footer-->
    <!-- cierra footer-->
       <!-- javascript -->

  <?php require_once 'assets/scripts/udec.php' ?>
  

    <!-- scrips -->
</body>
</html>