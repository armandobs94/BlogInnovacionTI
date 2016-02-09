$(document).ready(function(){

	/* Funciones Iniciar Sesión y Agregar nuevo usuario (Autor) */
	$("#newAutor").click(function(){
		$(".p-contenido").load("assets/Autores/nuevoAutor.php", function(statusTxt, statusTxt, xhr){
		var alerta = $(".p-contenido");

			if(statusTxt == "error"){	
				 alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
			}
		});
	});

	$("#loginAutor").click(function(){
		$(".p-contenido").load("assets/Autores/autorLogin.php", function(statusTxt, statusTxt, xhr){
		var alerta = $(".p-contenido");

			if(statusTxt == "error"){	
				 alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
			}
		});
	});

	/* Funciones de Menú */
	$("#fechasDestacadas").click(function(){
		$(".p-contenido").load("assets/Autores/fechasDestacadas.php", function(statusTxt, statusTxt, xhr){
		var alerta = $(".p-contenido");

			if(statusTxt == "error"){	
				 alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
			}
		});
	});

	$("#recientePost").click(function(){
		$(".p-contenido").load("assets/Autores/recientePost.php", function(statusTxt, statusTxt, xhr){
		var alerta = $(".p-contenido");

			if(statusTxt == "error"){	
				 alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
			}
		});
	});

	$("#recienteComent").click(function(){
		$(".p-contenido").load("assets/Autores/recienteComent.php", function(statusTxt, statusTxt, xhr){
		var alerta = $(".p-contenido");

			if(statusTxt == "error"){	
				 alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
			}
		});
	});

	$(".categoria").click(function(){
		$(this).ready(function(){
			$(".p-contenido").load("assets/Formularios/categorias.php", function(statusTxt, statusTxt, xhr){
			var alerta = $(".p-contenido");

				if(statusTxt == "error"){	
					alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
				}
			});
		});
	});


	$("#publicarTuto").click(function(){
		$(".p-contenido").load("assets/Formularios/publicarTuto.php", function(statusTxt, statusTxt, xhr){
		var alerta = $(".p-contenido");

			if(statusTxt == "error"){	
				alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
			}
		});
	});

	$("#publicarPolitica").click(function(){
		$(".p-contenido").load("assets/Formularios/publicarPolitica.php", function(statusTxt, statusTxt, xhr){
		var alerta = $(".p-contenido");

			if(statusTxt == "error"){	
				alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
			}
		});
	});

	$("#acercaDe").click(function(){
		$(".p-contenido").load("assets/Formularios/developerInfo.html", function(statusTxt, statusTxt, xhr){
		var alerta = $(".p-contenido");

			if(statusTxt == "error"){	
				alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
			}
		});
	});

	/* Mensaje - link de perfil de autor */
	$('[data-toggle="tooltip"]').tooltip();

	/* Ver blog completo de autores */
	$(".blogAutor").click(function(){
		$(this).ready(function(){
		$(".container").load("assets/Autores/autorBlog.php", function(statusTxt, statusTxt, xhr){
		var alerta = $(".p-contenido");
			if(statusTxt == "error"){	
				alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
				}
			});
		});
	});

	/* Ver post completo de autores */
	$(".postAutor").click(function(){
		var id = $(this).attr('id');
		$(".container").load("assets/Autores/autorPost.php?id="+id, function(statusTxt, statusTxt, xhr){
		var alerta = $(".p-contenido");
			if(statusTxt == "error"){	
				alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
				}
			});
	
	});

	/* Funciones dentro del Perfil del autor */

	$("#myPost").click(function(){
		$("#formularios").load("assets/Autores/nuevoPost.php", function(statusTxt, statusTxt, xhr){
		var alerta = $("#formularios");
			if(statusTxt == "error"){	
				alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
			}
		});
	});

	$("#myAdmon").click(function(){
		$("#formularios").load("assets/Autores/formuu.php", function(statusTxt, statusTxt, xhr){
		var alerta = $("#formularios");
			if(statusTxt == "error"){	
				alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
			}
		});
	});

	$("#misReportes").click(function(){
		$("#formularios").load("assets/Formularios/x.php", function(statusTxt, statusTxt, xhr){
		var alerta = $("#formularios");
			if(statusTxt == "error"){	
				alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
			}
		});
	});

	$("#misDatos").click(function(){
		$("#formularios").load("assets/Autores/autorMisdatos.php", function(statusTxt, statusTxt, xhr){
		var alerta = $("#formularios");
			if(statusTxt == "error"){	
				alerta.html("<p class='text-center'><img src='img/gral/errorpage.png'></p>");
			}
		});
	});	
});

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

$(".Revi").on({
	keyup: function(){
	//Limitaciones de contenido 
	var maxT = 10;
	var maxR = 15;
	var maxC = 2000;
	var valor = $(this).attr("id");

		if (valor == "npTitulo") {
			var resta = maxT - $(this).val().length;
			if (resta <= 0) {	
				$("#error1").addClass("has-error");
			}
			else {
				$("#error1").removeClass("has-error");	
			}
		}

		if (valor == "npResumen") {
			var resta = maxR - $(this).val().length;
			if (resta <= 0) {
				$("#error2").addClass("has-error");
			}
			else {
				$("#error2").removeClass("has-error");	
			}
		}
		if (valor == "npContenido") {
			var resta = maxC - $(this).val().length;
			if (resta <= 0) {
				$("#error3").addClass("has-error");
			}
			else {
				$("#error3").removeClassd("has-error");
			}
		}
	}
});

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