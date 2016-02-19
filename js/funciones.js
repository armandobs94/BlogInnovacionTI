/*
	@autor: Armando 
*/
var msgDiv = "<div class='alert alert-danger'>"+
			'El correo que ha ingresado no es correcto, favor de verificarlo.'+
			"</div><br>";
var msgVacio = "<div class='alert-danger'>"+
"<br>"+"&nbsp; &nbsp;  Por favor, ingrese la información solicitada."+
"<br>"+"&nbsp;"+"</div><br>";			
var msgNum = "<div class='alert-danger'>"+
"<br>"+"&nbsp; &nbsp;  El campo no es correcto."+
"<br>"+"&nbsp;"+"</div><br>";	

function valDatos(){
	$("#mensaje").empty();
	var n = document.getElementById('correo').value;
	var d = document.getElementById('sobre').value;
	
	if(n.length==0 || d.length==0){
		$("#mensaje").empty();
		$("#mensaje").append(msgVacio).fadeIn("slow");
	}else{
		if(validarEmail(n)==true){
			guardaDatos(n,d)
		}else{
			$("#mensaje").empty();
			$("#mensaje").append(msgDiv).fadeIn("slow");
		}
	}
}

function valPost(){
	
	var tP = $("#tituloPost").val();
	var rP = $("#resumenPost").val();
	var cP = $("#contenidoPost").val();
	var iP = $("#imagenPost").val();
	var lP = $("#linkPost").val();
	var eP = $("#etiquetaPost").val();

	if(tP.length==0 || rP.length==0 || cP.length==0 ){
		alert('Favor de ingresar la información solicitada.\n Los campos con * son requeridos.');
	}else{
		guardaPost(tP,rP,cP,iP,lP,eP);
	}
}

function limpiarFormulario(){
	$("#mensaje").empty();
	$('#formulario_datos').find('input').each(function() {
		switch(this.type) {
   			case 'number':
   				$(this).val('');
   				break;            
       		case 'text':            
    	        $(this).val('');
        	    break;
            case 'checkbox':
            case 'radio':
            	this.checked = false;
            	break;
        }        		
    });	
    			
	// $(formulario).find('select').each(function() {        			
 	//$("#"+this.id + " option[value=0]").attr("selected",true);
	// });    				
}

function guardaDatos(email,desc){
	$("#mensaje").empty();
	var formulario = 'correo='+email+'&desc='+desc;
	$.ajax({
		type: "POST",
  		url: "php/agregar-autor.php",
  		data: formulario,
	}).done(function(formulario){
		$('#listado').html(formulario);
	});
}

function guardaPost(titulo, resumen, contenido, img, link, etiqueta){
	var formulario = 'id_autor='+'1'+'&titulo='+titulo+'&resumen='+resumen+'&contenido='+contenido+'&img='+img+'&link='+link+'&etiqueta='+etiqueta;
	$.ajax({
		type: "POST",
  		url: "../php/agregar-post.php",
  		data: formulario,
	}).done(function(){
		alert("Su post fue enviado a revisión.");
		window.location="../autor/";
	});
}
//.-----
function eliminar(id){
	if(!confirm('¿Desea eleminar este registro?')){
		//cancelar
	}else{
		var dato = 'id='+id;
		$.ajax({
            type: "POST",
            url: "php/del.php",
            data: dato,
            success: function(dato) {            
                $('#listado').empty();
                $('#listado').html(dato).fadeIn("slow");
            }
        });
	}
}
//----se llama el formulario con los datos cargados para editarlos
function editar(id){
	var dato = 'id='+id;
		$.ajax({
            type: "POST",
            url: "php/mod.php",
            data: dato,
            success: function(dato) {            
                $('#listado').html(dato);
            }
        });
}	
//-----se mandan los datos para guardar la edicion
function editarDatos(id){
	var n = document.getElementById('nombre').value;
	var d = document.getElementById('desc').value;
	var p = document.getElementById('precio').value;
	var dato = 'id='+id;
	var f;
	if(id==""|| n==""|| d==""||p==""){
		$("#mensaje").empty();
		$("#mensaje").append(msgDiv).fadeIn("slow");
	}else{
	if(validarN(p)){
		$("#mensaje").empty();
		$("#mensaje").append(msgNum).fadeIn("slow");
	}else{
			$("#mensaje").empty();
			f='id='+id+'&nombre='+n+'&desc='+d+'&precio='+p;
			$.ajax({
           	 type: "POST",
            	url: "php/edit.php",
            	data: f,
            	success: function(f) {            
               	 $('#listado').html(f);
            	}
        	});	
		}		
	}
}
//------
function validar(campo) {
	$("#mensaje").empty();
  	var val = campo;
  	var validChars = ' 0123456789'+'qwertyuiopñlkjhgfdsazxcvbnmáéíóúQWERTYUIOPÑLKJHGFDSAZXCVBNM'+'"$%.,;#:'; 

  for(var i = 0; i < val.length; i++) { 
    if(validChars.indexOf(val.charAt(i)) == -1) {
      return true;
    }
  } 
  return false; 
}
//----
function validarN(campo) {
	$("#mensaje").empty();	
  	var val = campo;
  	var validChars = '0123456789.'; 

  for(var i = 0; i < val.length; i++) { 
    if(validChars.indexOf(val.charAt(i)) == -1) {
      return true;
    }
  } 
  return false; 
}

function validarEmail(email) {
    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if ( !expr.test(email) ){
        return false;
    }
    return true;
}
