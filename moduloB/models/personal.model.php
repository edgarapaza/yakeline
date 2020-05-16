<?php
require_once("Conexion.php");

class Personal
{
	private $conn;

	function __construct()
	{
		$link = new Conexion();
		$this->conn = $link->Conectar();
		return $this->conn;
	}
	//CRUD
	public function Create(){
		$sql = "";

	}

	public function Read(){

	}

	public function Update(){

	}

}