<!DOCTYPE html>
<html>
<body>

<div id="contenedor">
    <!-- Contenedor de solo un post -->                
    <div class="row p-contenido">

        <!-- Columna Izquierda-->  
        <div class="col-md-3 p-izquierda">
        </div><!-- Termina columna izquierda -->

        <!-- Columna Central -->
        <div class="col-md-6 p-centro">
            <h3>Registro como Autor</h3>
 
            <!-- Descripcion del post-->  
            <div  id="pDatosuser">
                <form id="formudata">

                <div class="form-group">
                    <div id="error">
                        <textarea class="form-control noresize" rows="10" placeholder="Acerca de mi..." id="aboutme" maxlength="1000" onKeyDown="cuenta()" onKeyUp="cuenta()" required></textarea>
                        <input class="form-control" type="text" id="cantidad" value="1000" disabled>
                    </div>
                    
                </div>

                <div class="form-group">
                    <!-- Formulario -->
                    <div class="input-group">
                        <span class="input-group-btn">
                         <span class="btn btn-primary btn-file"><img src="img/gral/folder265.png">
                         Examinar<input type="file" for="vista" multiple>
                         </span>
                        </span>
                        <input type="text" class="form-control" id="vista" placeholder="Subir imagen" readonly>
                    </div>
                </div>

                <div class="form-group text-right">
                <button class="btn btn-success">Guardar</button>
                </div>
                <hr>

                
                </form>          
            </div><!-- Termina div Datos de usuario -->
        </div><!-- Termina columna central -->  

        <!-- Columna Derecha -->             
        <div class="col-md-3 p-derecha">
        </div><!-- Termina columna derecha -->  

        </div><!-- Fin contenido -->
        <hr>

    </div><!-- Fin contenedor-->
</body>
</html>