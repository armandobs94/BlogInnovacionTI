<!DOCTYPE html>
<html lang="es">
<script type="text/javascript" src="js/funciones.js"></script>

<style type="text/css">.noresize {resize: none; }
</style>

<body>
<div class="row">
  <div class="col-md-3 p-izquierda">
  </div>

  <div class="col-md-6 p-centro" >
  <form role="form">

    <div class="form-group">
      <br>
      <br>
      <label >Titulo de la publicación</label>
      <div id="error1">
      <input type="email" class="form-control" id="npTitulo" onKeyDown="Revi()" onKeyUp="Revi()" placeholder="Mi titulo...">
      </div>
        <br>

      <label> Resumen de la publicación.</label>
      <div id="error2">
      <textarea class="form-control noresize" id="npResumen" rows="10" onKeyDown="Revi()" onKeyUp="Revi()" placeholder="Mi resumen..."></textarea>
      </div>
        <br>

      <label> Contenido de la publicación.</label>
      <div id="error3">
      <textarea class="form-control noresize" id="npContenido" rows="10" onKeyDown="Revi()" onKeyUp="Revi()" placeholder="Mi contenido..."></textarea>
      </div>

      <label >Agregar imagen</label>

      <input type="file" id="imagen">
        <br>

      <label>Link del video </label>
      <div id="error4">
      <input  type="text" class="form-control Revi" id="npUrl"  placeholder="Link...">
      </div>
        <br>
      
      <label>Etiquetas </label>
      <div id="error5">
      <input  type="text" class="form-control Revi" id="npEtiquetas"  placeholder="Mis Etiquetas...">
      </div>
        <br>

      <button class="btn btn-success">Enviar</button>
      <button class="btn btn-warning">Guardar</button>
    </div>
  </form>
  </div>

  <div class="col-md-3 p-derecha" ></div>
  </div>

</body>
</html>