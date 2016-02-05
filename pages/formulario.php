
<!DOCTYPE html>
<html lang="es">
  
      <style type="text/css">.noresize {resize: none; }
   </style>


<body>

      <div class="row">
        <div class="col-md-3 p-izquierda" ></div>
      <div class="col-md-6 p-centro" >
      <form role="form">

      <div class="form-group">
        
        <br>
        <br>
      <label >Titulo de la publicación</label>
          <input type="email" class="form-control" id="titulo"
                 placeholder="Introduce titulo de la publicación">
                 <br>
      <label> Resumen de la publicación.</label>
               <textarea class="form-control noresize" id="resumendelapublicacion" placeholder="Resumen de la publicación"></textarea>

               <br>

               <label> Contenido de la publicación.</label>
               <textarea class="form-control noresize" id="contenidodelapublicacion" placeholder="Contenido de la publicación"  ></textarea>


      <label >Agregar imagen</label>
          <input type="file" id="imagen">
          <br>


      <label>Link del video </label>

          <input  type="text" class="form-control" id="url"  placeholder="Introduce el link del video">

      <br>
      <label>Etiquetas </label>

          <input  type="text" class="form-control" id="etiquetas"  placeholder="Introduce las etiquetas">

      <br>




       <button class="btn btn-success">Guardar</button>
      </div>


      </form>
 </div>

      <div class="col-md-3 p-derecha" >.</div>
</div>

  </body>
</html>