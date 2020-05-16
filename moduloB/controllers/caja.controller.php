<?php
require("../models/Conexion.php");
require("../models/caja.model.php");

$link = new Conexion();
$conn = $link->Conectar();

if(!empty($_POST['idpersonal']) && !empty($_POST['caja']) && !empty($_POST['fondo']) && !empty($_POST['seccion']) && !empty($_POST['fechaextremainicio']) && !empty($_POST['fechaextremafinal']) && !empty($_POST['expedienteinicio']) && !empty($_POST['expedientefinal']))
{

	$idpersonal         = 1;
	$caja               = $_POST['caja'];
	$fondo              = $_POST['fondo'];
	$seccion            = $_POST['seccion'];
	$fechaextremainicio = $_POST['fechaextremainicio'];
	$fechaextremafinal  = $_POST['fechaextremafinal'];
	$expedienteinicio   = $_POST['expedienteinicio'];
	$expedientefinal    = $_POST['expedientefinal'];

	$caja2 = "Caja ".$caja;

	echo "idpersonal: ".$idpersonal."<br>";

	$sql = "SELECT * FROM caja WHERE estado = 1 AND idpersonal = ". $idpersonal;

	$res = $conn->query($sql);
	$cantidad_cajas = $res->num_rows;

	//echo "Numero: ". $cantidad_cajas;

	if($cantidad_cajas > 2){
		echo "Solo esta permitido trabajar con 2 proyectos al mismo tiempo.  Por favor culmine la Descripcion de alguna Caja que ya esta trabajando, y cuando termine cierre el proyecto, y posteriormente puede crear otro proyecto nuevo. Le agradecemos su comprensión";
		header("Location: ../caja_listado.php");

	}else{

		$cajas = new Caja();
		$cajas->Guardar($idpersonal,$caja2,$fondo,$seccion,$fechaextremainicio,$fechaextremafinal,$expedienteinicio,$expedientefinal);

		echo "Registrado Exitosamente";
		header("Location: ../caja_listado.php");
	}

}else{
	echo "Valio";
}
