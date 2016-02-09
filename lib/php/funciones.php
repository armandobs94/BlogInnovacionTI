<?php 
	require_once("conexion.php");

	/**
	* Clase para obtener todos los datos...
	*/
	class obtenerDatos extends Conectar{
		
		function __construct(){
			parent::__construct();
		}

		#metodo para obtener datos
		public function get_datos($sql){
			$result = $this->_db->query($sql);//se realiza la consulta
			$data = $result->fetch_all(MYSQLI_ASSOC);//se leen los datos
			return $data;
		}//termina get_datos
	}
?>