<?php
require("../moduloB/models/catalogo.model.php");
require("../moduloB/models/caja.model.php");

$cajas = new Caja();
$data = $cajas->Consultar();

$personal = new Catalogo();
$data2 = $personal->ConsultarPersonal();
$data3 = $personal->ConsultarPersonal();
$data4 = $personal->ConsultarPersonal();
?>
<html lang="es-ES">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
<style type="text/css">
	.grid-container {
  	   display: grid;
	   grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
	   grid-template-rows: 1fr 1fr 1fr;
	   grid-template-areas: "izquierda encabezado encabezado encabezado encabezado" 
	                       "izquierda caja1 caja2 caja3 caja4" 
                       "izquierda caja1 caja2 caja3 caja4";
	}

	.izquierda { 
		grid-area: izquierda;
		background-color: #D6D6D6;
		padding: 5px;
		color: white;
		height: 700px; 
	}
	.encabezado { 
		grid-area: encabezado;
		background-color: gray;
		color: white;
		height: 150px; 
	}

	.caja1 { 
		grid-area: caja1; 
	}
	.caja2 { grid-area: caja2; }

	.caja3 { grid-area: caja3; }

	.caja4 { grid-area: caja4; }
</style>
</body>
<form action="controllers/catalogo.controller.php" method="POST" role="form">
<div class="grid-container">
  <div class="izquierda">
  	
  </div>
  <div class="encabezado">
  	
  </div>
  <div class="caja1">
  	
  </div>
  <div class="caja2">
  	
  </div>
  <div class="caja3">
  	
  </div>
  <div class="caja4">
  	
  </div>
</div>
</form>
</html>