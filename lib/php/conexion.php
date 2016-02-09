<?php
	require_once "configuracion.php";
	/*
	 * Clase que sirve para hacer la conexion a la base de datos, realizar consultas y obtener los resultados de la consulta
	 * usando mysqli
	*/	 
	class HelperMySql{
		private $M;//Object MySQLi Connection
		private $R = false;//Object Result
		private $data = Array(); //Datos de conexión
		
		public function __construct($h,$u,$p,$d){
			/* guardamos datos de conexión por si se
			 * llega a perder conexión entonces reconectar */
			$this->data = Array($h,$u,$p,$d);
			
			/* realizamos la conexión */
			$this->M = new mysqli($h, $u, $p, $d);
		}

		/* elimina la conexion una vez terminado el proceso.	*/
	   	public function __destruct() {
      			$this->close();
  		 }
			

		/* 
		 * ejecuta una consulta SQL y asigna el Object Result a la
		 * variable interna y privada $R.
		 */
		public function query($sql){
			$this->R = false;
			/* Si la conexión se ha perdido (MySQL server
			 * has gone away o parecidos), reconectamos al servidor. */
			if($this->M->errno){
				$this->__construct($data[0],$data[1],$data[2],$data[3]);
			}
			
			$this->debug($sql);
			
			$this->R = $this->M->query($sql);

			if($this->M->errno){
				$this->R = false;
				return false;
			}else{
				return $this->R;
			}
		}
		
		public function debug($str, $exit = false){ return false;
			echo "<pre style='background-color:#fff;font-size:14px;font-family:tahoma;padding:10px;border-bottom:1px solid #000;'>";
			print_r($str);
			echo "</pre>";
			
			if($exit)exit();
		}
		
		
		/* 
		 * regresa un registro de la variable privada Object Result $R
		 */
		public function fetch($R = null){
			if(is_null($R)){
				$R = $this->R;
			}
			
			if($R == false){
				$result = false;
			}else{
				$result = $R->fetch_assoc();
			}
			
			return $result;
		}

				/* 
		 * regresa un registro de la variable privada Object Result $R
		 */
		public function fetch_array($R = null){
			if(is_null($R)){
				$R = $this->R;
			}
			
			if($R == false){
				$result = false;
			}else{
				$result = $R->fetch_array();
			}
			
			return $result;
		}
				/* 
		 * regresa un registro de la variable privada Object Result $R
		 */
		public function fetch_fields($R = null){
			if(is_null($R)){
				$R = $this->R;
			}
			
			if($R == false){
				$result = false;
			}else{
				$result = $R->fetch_fields();
			}
			
			return $result;
		}
		
		/*
		 * Cierra la conexión MySQLi si es que no se ha cerrado ya.
		 */
		public function close(){
			/* Si la conexión no se ha perdido entonces la cerramos */
			if($this->M->errno == 0){
				$this->M->close();
			}
			
			return true;
		}
		
		public function next_result(){
			/* Si la conexión no se ha perdido entonces la cerramos */
			if($this->M->errno == 0){
				$this->M->next_result();
			}
			
			return true;
		}	
		
		public function escape($str){
			/* Si la conexión se ha perdido (MySQL server
			 * has gone away o parecidos), reconectamos al servidor. */
			if($this->M->errno){
				$this->__construct($data[0],$data[1],$data[2],$data[3]);
			}
			
			return $this->M->real_escape_string($str);
		}
		
		/*
		 * regresa el último id insertado en un registro.
		 */
		public function last_id(){
			if($this->M->errno === 0){
				return $this->M->insert_id;
			}else{
				return false;
			}
		}
		
		/*
		 * regresa la cantidad de registros afectados por un 
		 * INSERT, UPDATE, DELETE
		 */
		public function affected_rows(){
			return $this->M->affected_rows;
		}
		
		/*
		 * regresa la cantidad de registros traidos por un SELECT
		 */
		public function count_rows(){
			return $this->R->num_rows;
		}
		// Regresa un arreglo con TODOS los resultados
		public function fetch_all($resulttype = MYSQLI_NUM)
        {	
				$R = $this->R;
			
            if (method_exists('mysqli_result', 'fetch_all')) # Compatibility layer with PHP < 5.3
                $res = parent::fetch_all($resulttype);
            else
                for ($res = array(); $tmp = $R->fetch_array($resulttype);) $res[] = $tmp;

            return $res;
        }		
		
	}
?>