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

	public function Guardar($idpersonal,$caja,$fondo,$seccion,$fechaextremainicio,$fechaextremafinal,$expedienteinicio,$expedientefinal)
	{
		$fecCreated = date('Y-m-d H:i:s');
		
		$sql = "INSERT INTO caja VALUES (null,'$idpersonal','$caja','$fondo','$seccion','$fechaextremainicio','$fechaextremafinal','$expedienteinicio','$expedientefinal','$fecCreated',1,null);";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		
	}

	public function Modificar($idcaja)
	{
		$sql = "UPDATE caja SET fondo = 'INTENDENCIA', fechaextremainicio = '1824', 
fechaextremafinal = '1826', expedienteinicio = '123', expedientefinal = '240' WHERE (idcaja = '$idcaja');";

		if(!$response = $this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}		
	}

	public function Consultar($idpersonal)
	//consulta CADA CAJA COMO PROYECTO
	{

		$sql = "SELECT idcaja,idpersonal,caja,fondo,seccion,fechaextremainicio AS inicio,fechaextremafinal AS final, expedienteinicio AS exp1,expedientefinal AS exp2 
			FROM caja WHERE estado = 1 AND idpersonal = $idpersonal;";

		if(!$response = $this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

		$response = $this->conn->query($sql);
		return $response;
	}

	public function ConsultarCaja($idcaja)
	//consulta a la tabla caja  DETALLES DE LA CAJA
	{

		$sql = "SELECT idcaja,idpersonal,caja,fondo,seccion,fechaextremainicio AS inicio,fechaextremafinal AS final, expedienteinicio AS exp1,expedientefinal AS exp2 
			FROM caja WHERE estado = 1 AND idcaja = $idcaja;";

		if(!$response = $this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

		$response = $this->conn->query($sql);
		$data = $response->fetch_array(MYSQLI_ASSOC);
		return $data;
	}

	

}
