<?php
require("../moduloB/models/funcion.model.php");
$funcion = new Funcion();
$data = $funcion->ConsultarPersonal();

?>
<html lang="es-ES">
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		
	<h1>Funcion</h1>
		<form action="controllers/funcion.controller.php" method="POST" role="form">
			<div class="form-group">
				<label for="">Funcion :</label>
				<input type="text" class="form-control" id="" name="funcion" placeholder="Funcion">
			</div>
			<div>
				<label for="">Personal:</label>
				<select name="idpersonal" id="" class="form-control">
			     	<option value="0" selected="selected">[Seleccionar]</option>
			     	<option value="1" selected="selected">2</option>
					
				</select>
			</div>
			<div class="form-group">
				<label for=""> Fecha Inicio:</label>
				<input type="date" class="form-control" id="" name="fecinicio" placeholder="MM/dd/aaaa">
			</div>
			<div class="form-group">
				<label for="">Fecha Finalizacion:</label>
				<input type="date" class="form-control" id="" name="feccese" placeholder="MM/dd/aaaa">
			</div>				
			<button type="submit" class="btn btn-primary">enviar</button>
    	</form>

	</div>

</body>
</html>
