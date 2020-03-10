<?php
require("../moduloB/models/funcion.model.php");
require("../moduloB/models/catalogo.model.php");

$personal = new Catalogo();
$data = $personal->ConsultarPersonal();

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
					<?php 
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					 
					?>
					<option value="<?php echo $fila['id_personal']; ?>"><?php echo $fila['personal'];?></option>
					<?php } ?>
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
