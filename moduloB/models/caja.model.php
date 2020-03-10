<?php
require_once("Conexion.php");

class Caja
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($idpersonal, $caja, $fondo, $seccion, $fechaextrema, $estado)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO caja VALUES(null, '$idpersonal', '$caja', '$fondo', '$seccion', '$fechaextrema', '$fechaActual', '$estado', '$fechaActual');";

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
		$sql = "SELECT idcaja,idpersonal,caja,fondo,seccion,fechaextremainicio,fechaextremafinal,expedienteinicio,expedientefinal,fecCreated,estado,fecCierre FROM caja;";

		$response = $this->conn->query($sql);

		return $response;
	}

}
