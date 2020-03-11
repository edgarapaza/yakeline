<?php
require("../moduloB/models/caja.model.php");
?>
<html lang="es-ES">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		
	<h1>Caja</h1>
		<form action="controllers/caja.controller.php" method="POST" role="form">
			<div class="form-group">
				<label for="">Personal:</label>
				<input type="text" class="form-control" id="" name="idpersonal" placeholder="Personal">
			</div>
			<div class="form-group">
				<label for="">Caja:</label>
				<input type="text" class="form-control" id="" name="caja" placeholder="Caja">
			</div>
			<div class="form-group">
				<label for="">Fondo:</label>
				<input type="text" class="form-control" id="" name="fondo" placeholder="Fondo">
			</div>
			<div class="form-group">
				<label for="">Seccion:</label>
				<input type="text" class="form-control" id="" name="seccion" placeholder="Seccion">
			</div>
			<div class="form-group">
				<label for="">Fecha Extrema:</label>
				<input type="text" class="form-control" id="" name="fechaextrema" placeholder="Fecha Extrema">
			</div>
			<div class="form-group">
				<label for="">Estado:</label>
				<input type="text" class="form-control" id="" name="estado" placeholder="Estado">
			</div>				
			<button type="submit" class="btn btn-primary">enviar</button>
    

		</form>

	</div>

</body>
</html>
