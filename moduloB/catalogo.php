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
	}
	.encabezado { 
		grid-area: encabezado;
		background-color: gray;
		color: white;
	}

	.caja1 { grid-area: caja1; }
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
		<fieldset>
			<legend>Codigo de Referencia</legend>
			<div class="form-group">
				<p>
					PE / ARP / 
				<select name="direccion" id="" class="form-control">
					<option value="0" selected="selected">[Seleccionar]</option>
					<option value="AH">Archivo Historico</option>
					<option value="AI">Archivo Intermedio</option>
				</select>
				 / INT / 
				 <input type="text" class="form-control" id="" name="codreferencia" placeholder="codigo de referencia">
				</p>
			</div>
		</fieldset>	
		<fieldset>
			<legend>AREA DE IDENTIFICACION</legend>
			<div>
				<label for="">Caja / Unidad de Archivamiento :</label>
				<select name="idcaja" id="" class="form-control">
			     	<option value="0" selected="selected">[Seleccionar]</option>
					<?php 
					while ($fila = $data->fetch_array(MYSQLI_ASSOC)) {					 
					?>
					<option value="<?php echo $fila['idcaja']; ?>"><?php echo $fila['caja'];?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Seccion:</label>
				<input type="text" class="form-control" id="" name="seccion" placeholder="seccion">
			</div>
			<div class="form-group">
				<label for="">Titulo:</label>
				<input type="text" class="form-control" id="" name="titulo" placeholder="titulo">
			</div>
			<div class="form-group">
				<label for="">Fecha Documento:</label>
				<input type="date" class="form-control" id="" name="fecdocumento" placeholder="Fecha Documento">
			</div>
			<div class="form-group">
				<label for="">Nivel de Descripcon:</label>
				<select name="nivdescrip" id="" class="form-control">
					<option value="0" selected="selected">[Seleccionar]</option>
					<option value="Unidad Documental Compuesta">Unidad Documental Compuesta</option>
					<option value="Unidad Documental Simple">Unidad Documental Simple</option>
				</select>
			</div>
			<div class="form-group">
				<label for="">Volumen de la unidad de descripción:</label>
				<input type="text" class="form-control" id="" name="volunimed" placeholder="Volumen de la unidad de descripción">
			</div>

		</fieldset>
  	
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