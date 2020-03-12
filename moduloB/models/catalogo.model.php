<?php
require_once("Conexion.php");

class Catalogo
{
	private $conn;
	private $conn2;

	public function Guardar($idcaja,$direccion, $codreferencia, $seccion, $titulo, $fecdocumento, $nivdescrip, $volunimed, $productor, $formaingreso, $contenido, $dimensiones, $conservacion, $instdescrip, $estadoconservacion, $copias, $notas, $persdescripcion, $persdirector, $persrevisor, $fecdescripcion, $fecfinalizacion, $estado, $obs)
	{

		$link = new Conexion();
		$this->conn = $link->Conectar();

		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO catalogos VALUES(null, '$idcaja', 'PE/ARP/$direccion/INT/$codreferencia', '$seccion', '$titulo', '$fecdocumento', '$nivdescrip', '$volunimed', '$productor', '$formaingreso', '$contenido', '$dimensiones', '$conservacion', '$instdescrip', '$estadoconservacion', '$copias', '$notas', '$persdescripcion', '$persdirector', '$persrevisor', '$fecdescripcion', '$fecfinalizacion', '$fechaActual', '1', '$obs');";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}
		return true;
		mysqli_close($this->conn);
	}

	public function Modificar()
	{
		
	}

	public function Consultar()
	{
		$sql = "SELECT idcatalogo, codreferencia, seccion, titulo, fecdocumento, nivdescrip, volunimed, productor, formaingreso, contenido, dimensiones, conservacion, instdescrip, estadoconservacion, copias, notas, persdescripcion, persdirector, persrevisor, fecdescripcion, fecfinalizacion, fecCreate, estado, obs FROM catalogo; ";

		$response = $this->conn->query($sql);

		return $response;
	}
	public function ConsultarPersonal(){

		$link = new Conexion();
		$this->conn2 = $link->Conectar2();

		$sql = "SELECT * FROM vistapersonal";

		if(!$response = $this->conn2->query($sql)){
			echo "Error: ". mysqli_error($this->conn2);
			exit();
		}

		return $response;	

		mysqli_close($this->conn2);
	}

}
