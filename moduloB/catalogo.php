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
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body>
	<div class="container">
		
	<h1>Catalogo</h1>
		<form action="controllers/catalogo.controller.php" method="POST" role="form">
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

		<fieldset>
			<legend>AREA DE CONTEXTO</legend>
			<div class="form-group">
				<label for="">Nombre del Productor:</label>
				<input type="text" class="form-control" id="" name="productor" placeholder="Nombre del Productor">
			</div>
			<div class="form-group">
				<label for="">Formato de Ingreso:</label>
				<input type="text" class="form-control" id="" name="formaingreso" placeholder="Formato de Ingreso">
			</div>
		</fieldset>

		<fieldset>
			<legend>AREA DE CONTENIDO Y ESCRITURA</legend>
			<div class="form-group">
				<label for="">Alcance y Contenido:</label>
				<textarea type="text" class="form-control" id="" name="contenido" cols="30" rows="7" placeholder="Alcance y contenido"> </textarea>
			</div>
		</fieldset>

		<fieldset>
			<legend>AREA DE CONDICIONES DE ACCESO Y USO</legend>
			<div class="form-group">
				<label for="">Dimensiones:</label>
				<input type="text" class="form-control" id="" name="dimensiones" placeholder="Dimensiones">
			</div>
			<div class="form-group">
				<label for="">Conservacion:</label>
				<input type="text" class="form-control" id="" name="conservacion" placeholder="Conservacion">
			</div>
			<div class="form-group">
				<label for="">Instrumentos de Descripcion:</label>
				<input type="text" class="form-control" id="" name="instdescrip" placeholder="Instrumentos de Descripcion">
			</div>
			<div class="form-group">
				<label for="">Estado de conservacion:</label>
				<input type="text" class="form-control" id="" name="estadoconservacion" placeholder="Estado de conservacion">
			</div>
		</fieldset>

		<fieldset>
			<legend>AREA DE DOCUMENTACION ASOCIADA</legend>
			<div class="form-group">
				<label for="">Existencia y localizacion de copias:</label>
				<input type="text" class="form-control" id="" name="copias" placeholder="Existencia y localizacion de copias">
			</div>
		</fieldset>

		<fieldset>
			<legend>AREA DE NOTAS</legend>
			<div class="form-group">
				<label for="">Notas:</label>
				<input type="text" class="form-control" id="" name="notas" placeholder="Notas">
			</div>
		</fieldset>

		<fieldset>
			<legend>AREA DE CONTROL DE DESCRIPCION</legend>
			<div class="form-group">
				<label for="">Descripcion a Cargo de:</label>
				<select name="persdescripcion" id="" class="form-control">
			     	<option value="0" selected="selected">[Seleccionar]</option>
					<?php 
					while ($fila = $data2->fetch_array(MYSQLI_ASSOC)) {					 
					?>
					<option value="<?php echo $fila['id_personal']; ?>"><?php echo $fila['personal'];?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Direccion a cargo de:</label>
				<select name="persdirector" id="" class="form-control">
			     	<option value="0" selected="selected">[Seleccionar]</option>
					<?php 
					while ($fila = $data3->fetch_array(MYSQLI_ASSOC)) {					 
					?>
					<option value="<?php echo $fila['id_personal']; ?>"><?php echo $fila['personal'];?></option>
					<?php } ?>
				</select>
			</div>
			<div class="form-group">
				<label for="">Revision a cargo de:</label>
				<select name="persrevisor" id="" class="form-control">
			     	<option value="0" selected="selected">[Seleccionar]</option>
					<?php 
					while ($fila = $data4->fetch_array(MYSQLI_ASSOC)) {					 
					?>
					<option value="<?php echo $fila['id_personal']; ?>"><?php echo $fila['personal'];?></option>
					<?php } ?>
				</select>			
			</div>
			<div class="form-group">
				<label for="">Fecha de Inicio de Descripcion:</label>
				<input type="date" class="form-control" id="" name="fecdescripcion" placeholder="MM/dd/aaa" >
			</div>

			<div class="form-group">
				<label for="">Fecha de Finalizacion de Descripcion:</label>
				<input type="date" class="form-control" id="" name="fecfinalizacion" placeholder="MM/dd/aaa">
			</div>
			<div class="form-group">
				<label for="">Estado:</label>
				<input type="text" class="form-control" id="" name="estado" placeholder="Estado">
			</div>
			<div class="form-group">
				<label for="">Observaciones:</label>
				<textarea type="" class="form-control" id="" name="obs" placeholder="Observaciones"></textarea>
			</div>

		</fieldset>
				
			<button type="submit" class="btn btn-primary">enviar</button>
    

		</form>

	</div>

</body>
</html>
