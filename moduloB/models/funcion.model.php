<?php
require_once("Conexion.php");
require_once("conexion_remota.php");

class Funcion
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($funcion, $idpersonal, $fecinicio, $feccese)
	{
		$sql = "INSERT INTO funcion VALUES(null, '$funcion','$idpersonal', '$fecinicio', '$feccese');";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql = "SELECT funcion,idpersonal, fecinicio, feccese  FROM funcion; ";

		$response = $this->conn->query($sql);

		return $response;
	}


}
