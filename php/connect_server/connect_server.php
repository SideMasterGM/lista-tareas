<?php
	#Author: Jerson A. Martínez M. (Side Master).

	class Connect_Server {
		/*Datos por defecto de MySQL*/
		public $host = "localhost";
		public $user = "root";
		public $pass = "";
		var $db 	 = "mydb";

		/*Decide que datos de conexión se utilizrá*/
		function __construct($h = NULL, $u = NULL, $p = NULL, $db = NULL){
			$this->host = is_null($h) ? $this->host : $h;
			$this->user = is_null($u) ? $this->user : $u;
			$this->pass = is_null($p) ? $this->pass : $p;
			$this->$db  = is_null($db) ? $this->db : $db;
		}
	}

	/*Objeto donde se le pasan los datos de conexión!.*/
	$Connect = new Connect_Server("127.0.0.1", "SideMaster", "Programador", "mydb");
	/*Objeto de conexión a la extensión MySQLi*/
	$MySQLi = new mysqli($Connect->host, $Connect->user, $Connect->pass, $Connect->db);

	if ($MySQLi->connect_errno)
		echo "Se ha generado el siguiente error de conexión: ".$MySQLi->connect_error;

	/*La conexión la cerramos en el fichero de utilización*/

?>