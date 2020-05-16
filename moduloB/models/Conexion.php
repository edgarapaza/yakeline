<?php

class Conexion {

	public function Conectar() {
		$host = "localhost";
		$user = "user";
		$pass = "A@dmin0215.,$";
		$db   = "catalogo";
		#require_once ("config.php");
		//$mysqli = new mysqli("localhost","coraima", "A@dmin0215.,$", "catalogo");
		$mysqli = new mysqli($host, $user, $pass, $db);

		$mysqli->set_charset("utf8");

		if ($mysqli->connect_errno) {
			echo "Error al contenctar a MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
			exit();
		}

		#echo $mysqli->host_info. "Dentro de la conexion1";
		return $mysqli;
	}

	public function Conectar2() {

		$host = "localhost";
		$user = "user";
		$pass = "A@dmin0215.,$";
		$db   = "catalogo";
		#require_once ("config.php");
		//$mysqli = new mysqli("localhost","coraima", "A@dmin0215.,$", "catalogo");
		$mysqli = new mysqli($host, $user, $pass, $db);
		$mysqli->set_charset("utf8");

		if ($mysqli->connect_errno) {
			echo "Error al contenctar a MySQL: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
			exit();
		}
		#echo $mysqli->host_info. "Dentro de la conexion2";
		return $mysqli;
	}

}

?>
