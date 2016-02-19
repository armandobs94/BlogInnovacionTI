<?php 
<<<<<<< HEAD
	 // define('SERVER', "148.213.20.205");
	 // define('USER', "blog");
	 // define('PASSW',"Bl0gdgidt");
	 // define('BD', "bd_blog");

	define('SERVER', "localhost");
	define('USER', "root");
	define('PASSW',"");
	define('BD', "bd_blog");

	//$saml_lib_path = '/var/simplesamlphp/lib/_autoload.php';  //La ruta donde se encuentra la librería principal de simplesamlphp
	//require_once($saml_lib_path);
	//$SP_URL = 'http://'.$_SERVER['SERVER_NAME'].":8085/demo";  // url de nuestro servidor.
	//$SP_ORIGEN= 'borrar';   // Fuente de autenticación definida en el authsources del SP
	//$saml = new SimpleSAML_Auth_Simple($SP_ORIGEN);   // Se crea la instancia del saml, pasando como parametro la fuente de autenticación.
=======
	 define('SERVER', "148.213.20.205");
	 define('USER', "blog");
	 define('PASSW',"Bl0gdgidt");
	 define('BD', "bd_blog");

	//define('SERVER', "localhost");
	//define('USER', "root");
	//define('PASSW',"");
	//define('BD', "db_blog");

	$saml_lib_path = '/var/simplesamlphp/lib/_autoload.php';  //La ruta donde se encuentra la librería principal de simplesamlphp
	require_once($saml_lib_path);
	$SP_URL = 'http://'.$_SERVER['SERVER_NAME'].":8085/demo";  // url de nuestro servidor.
	$SP_ORIGEN= 'borrar';   // Fuente de autenticación definida en el authsources del SP
	$saml = new SimpleSAML_Auth_Simple($SP_ORIGEN);   // Se crea la instancia del saml, pasando como parametro la fuente de autenticación.
>>>>>>> origin/master
 ?>