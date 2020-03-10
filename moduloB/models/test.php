<?php
require("Conexion.php");



class Catalogo
{
	private $conn2;
	public function ConsultarPersonal(){

		$link = new Conexion();
		$this->conn2 = $link->Conectar2();

		$sql = "SELECT * FROM vistapersonal";

		if(!$response = $this->conn2->query($sql)){
			echo "Error: ". mysqli_error($this->conn2);
			exit();
		}

		while ($fila = $response->fetch_array()) {
			echo $fila[0];
			echo $fila[1];
			echo $fila[2];
		}

		return $response;	
	}

}


$catalogo = new Catalogo();
$catalogo->ConsultarPersonal();
