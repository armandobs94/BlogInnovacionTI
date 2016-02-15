<?php  	
	$saml_lib_path = '/var/simplesamlphp/lib/_autoload.php';  //La ruta donde se encuentra la librería principal de simplesamlphp
    require_once($saml_lib_path);
    $SP_URL = 'http://'.$_SERVER['SERVER_NAME'].":8080/blog/moderador";  // url de nuestro servidor.
    $SP_ORIGEN= 'borrar';   // Fuente de autenticación definida en el authsources del SP
    $saml = new SimpleSAML_Auth_Simple($SP_ORIGEN);   // Se crea la instancia del saml, pasando como parametro la fuente de autenticación.
?>    