<?php
require_once("Conexion.php");

class Catalogo
{
	private $conn;
	private $conn2;

	public function Conexion1(){
		//Conexion a la Base de Datos Catalogo
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}
/*
	public function Conexion2(){
		//Conexion a la Base de Datos AvanceMetas para el Personal
		$link = new Conexion();
		$this->conn2 = $link->Conectar2();
		return $this->conn2;
	}
	*/

	public function Guardar($idcaja,$direccion, $codreferencia, $seccion, $titulo, $fecdocumento, $nivdescrip, $volunimed, $productor, $formaingreso, $contenido, $dimensiones, $conservacion, $instdescrip, $estadoconservacion, $copias, $notas, $persdescripcion, $persdirector, $persrevisor, $fecdescripcion, $fecfinalizacion, $estado, $obs)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO catalogos VALUES(null, '$idcaja', 'PE/ARP/$direccion/INT/$codreferencia', '$seccion', '$titulo', '$fecdocumento', '$nivdescrip', '$volunimed', '$productor', '$formaingreso', '$contenido', '$dimensiones', '$conservacion', '$instdescrip', '$estadoconservacion', '$copias', '$notas', '$persdescripcion', '$persdirector', '$persrevisor', '$fecdescripcion', '$fecfinalizacion', '$fechaActual', '$estado', '$obs');";

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
	}

}
