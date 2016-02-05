$(document).ready(function(){
	$("#secUno").click(function(){

	});
	$("#secDos").click(function(){

	});

	$('#Acercade').click(function(){
		Ruta("pages/developerInfo.html");
	});

	$('#nuevoAutor').click(function(){
		//Ruta("pages/autorBio.php");
		$(".container").load("pages/autorBio.php");
	});


	/* Iniciar sesion (Autor) */
	$("#loginAutor").click(function(){
		$(".container").load("Autores/formLogin.php");
	});

	$('#nuevo').click(function(){
		$("#contenidoAutor").load("pages/formulario.php");
	});

	$('#datos').click(function(){
		$("#contenidoAutor").load("Autores/misdatos.php");
	});


	/* Mensaje - link de perfil de autor */
	$('[data-toggle="tooltip"]').tooltip();

	/* enviar al blog del autor */
	$(".blogAutor").click(function(){
		$(this).ready(function(){
			$(".container").load("Autores/post.php");
		});
	});

	/* ver post completo del autor */
	$(".continuarPost").click(function(){
		$(this).ready(function(){
			Ruta("pages/autorPost.php");
		});
	});

});

/* Funcion añadir los archivos en un solo DIV*/
function Ruta(archivo){
var peticion;
	if (window.XMLHttpRequest){
	peticion = new XMLHttpRequest();
	}
	else{
	peticion = new ActiveXObject("Microsoft.XLMHTTP");
	}
peticion.onreadystatechange = function(){
	if (peticion.readyState == 4 && peticion.status == 200){
		document.getElementById("colcentro").innerHTML = peticion.responseText;		
		}
	else{
		document.getElementById("colcentro").innerHTML = "No sepuede mostrar";
	}
}
peticion.open("POST",archivo,true);
peticion.send();
}

/* Contador de caractereds */
function cuenta(){
	var txtMaximo = 1000;
	var obtn = document.getElementById("aboutme").value.length;
	var enviar = document.getElementById("cantidad").value= "Caracteres restantes: "+ (txtMaximo - obtn); 

	var resta =  txtMaximo - obtn;
	if (resta <= 0) {
		$("#error").addClass("has-error");
		$("#cantidad").val("Has revasado el limite de caracteres permitido");
	}
	else {
		$("#error").removeClass("has-error");
	}
}

/* Cargar imagen del autor */
$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
});//termina carga de imagen de autor


/* FUNCIONES DEL FORMULARIO DE LOGIN */
function supportsHTML5Storage() {
    try {
        return 'localStorage' in window && window['localStorage'] !== null;
    } catch (e) {
        return false;
    }
}

/**
 * Test data. This data will be safe by the web app
 * in the first successful login of a auth user.
 * To Test the scripts, delete the localstorage data
 * and comment this call.
 *
 * @returns {boolean}
 */
function testLocalStorageData() {
    if(!supportsHTML5Storage()) { return false; }
    localStorage.setItem("PROFILE_IMG_SRC", "//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" );
    localStorage.setItem("PROFILE_NAME", "César Izquierdo Tello");
    localStorage.setItem("PROFILE_REAUTH_EMAIL", "oneaccount@gmail.com");
}