<?php
require_once("Conexion.php");

class Catalogo
{
	private $conn;
	private $conn2;

	public function Guardar($idcaja, $direccion, $codreferencia, $seccion, $titulo, $fecdocumento, $nivdescrip, $volunimed, $productor, $formaingreso, $contenido,$dimension, $dimensiones, $conservacion, $instdescrip, $estadoconservacion, $copias, $notas, $persdescripcion, $persdirector, $obs)
	{

		$link = new Conexion();
		$this->conn = $link->Conectar();

		$fechaActual = date('Y-m-d H:i:s');
		$sql = "INSERT INTO catalogos (idcaja,codreferencia,seccion,titulo,fecdocumento,nivdescrip,volunimed,productor,formaingreso,contenido,dimensiones,conservacion,instdescrip,estadoconservacion,copias,notas,persdescripcion,persdirector,fecdescripcion,fecCreate,estado,obs)
		VALUES ('$idcaja','PE/ARP/$direccion/INT/$codreferencia','$seccion','$titulo','$fecdocumento','$nivdescrip','$volunimed','$productor','$formaingreso','$contenido','$dimension Cm. X $dimensiones Cm.','$conservacion','$instdescrip','$estadoconservacion','$copias','$notas','$persdescripcion','$persdirector',now(),now(),1,'$obs');";

		if(!$this->conn->query($sql)){
			echo "Error: " . mysqli_error($this->conn);
			exit();
		}

		mysqli_close($this->conn);
	}

	public function Modificar()
	{

	}

	public function Consultar($idcaja)
	{
		$sql = "SELECT idcatalogo, codreferencia, seccion, titulo, fecdocumento, nivdescrip, volunimed, productor, formaingreso, contenido, dimensiones, conservacion, instdescrip, estadoconservacion, copias, notas, persdirector, fecdescripcion, fecfinalizacion, obs FROM catalogos WHERE idcaja = $idcaja";

		$link = new Conexion();
		$conn = $link->Conectar();
		if(!$response = $conn->query($sql)){
			echo "Error:" . mysqli_error($conn);
		}

		return $response;
	}
	public function ConsultarPersonal(){

		$link = new Conexion();
		$this->conn2 = $link->Conectar2();

		$sql = "SELECT * FROM personal";

		if(!$response = $this->conn2->query($sql)){
			echo "Error: ". mysqli_error($this->conn2);
			exit();
		}

		return $response;

		mysqli_close($this->conn2);
	}

}
