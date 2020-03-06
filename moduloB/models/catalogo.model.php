<?php
require_once("Conexion.php");

class Catalogo
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}

	public function Guardar($idcaja,$codreferencia, $seccion, $titulo, $fecdocumento, $nivdescrip, $volunimed, $productor, $formaingreso, $contenido, $dimensiones, $conservacion, $instdescrip, $estadoconservacion, $copias, $notas, $persdescripcion, $persdirector, $persrevisor, $fecdescripcion, $fecfinalizacion, $estado, $obs)
	{
		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO catalogos VALUES(null, 1, '$codreferencia', '$seccion', '$titulo', '$fecdocumento', '$nivdescrip', '$volunimed', '$productor', '$formaingreso', '$contenido', '$dimensiones', '$conservacion', '$instdescrip', '$estadoconservacion', '$copias', '$notas', '$persdescripcion', '$persdirector', '$persrevisor', '$fecdescripcion', '$fecfinalizacion', '$fechaActual', '$estado', '$obs');";

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

	public function CrearOficinas()
	{
		
	}
}
