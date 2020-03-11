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
	<link rel="stylesheet" type="text/css" href="css/template.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet"> 

</head>
<body>

</body>
<form action="controllers/catalogo.controller.php" method="POST" role="form">
<div class="grid-container">
  <div class="izquierda">
  	<h4>Personal</h4>
  </div>
  <div class="encabezado">
  	<h1>FONDO DOCUMENTAL: INTENDENCIA</h1>
    
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