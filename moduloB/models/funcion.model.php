<?php
require_once("Conexion.php");
//require_once("conexion_remota.php");

class Funcion
{
	private $conn, $conn2;

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

	public function ConsultarPersonal()
	{
		/*$sql = "SELECT id_personal, nombre, apellidos FROM personal";
		
		if(!$response = $this->conn->query($sql))
		{
			echo "Error: ". mysqli_error($this->conn);
			exit();
		}
		$data = $response->fetch_array(MYSQLI_ASSOC);

		return $data;
		$this->conn->close();
		*/
	}
}
