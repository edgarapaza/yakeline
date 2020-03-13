<?php
include "header.php";
require("../moduloB/models/caja.model.php");

?>
	<div class="grid-container">
		<div class="izquierda">
			<img src="img/user.png">
			<p>Personal</p>
			<hr>

			<a href="caja.php" id="nuevo" class="btn btn-primary">NUEVA CAJA</a>
			<br>	<br>
			<a href="caja_listado.php" id="abiertos" class="btn btn-primary">PROYECTOS ACTIVOS</a>
			<br> <br>
			<a href="caja_cerrados.php" id="cerrados" class="btn btn-primary">PROYECTOS CERRADOS</a>
	  	
	  	</div>
		<div class="encabezado">
		  	<h2>FONDO DOCUMENTAL: INTENDENCIA</h2>
		  	<p>Crear nuevo proyecto</p>
		</div>

		
		<div class="caja1">
			<form action="controllers/caja.controller.php" method="POST" role="form">
				<div class="form-group">
					<label for="">Personal:</label>
					<select name="idpersonal">
						<option value="1">Juan Calla</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Caja:</label>
					<input type="number" class="form-control" id="caja" name="caja" placeholder="Numero de Caja">
				</div>
				<div class="form-group">
					<label for="">Fondo:</label>
					<select name="fondo" id="fondo">
						<option value="Intendencia">INTENDENCIA</option>
					</select>
				</div>
				<div class="form-group">
					<label for="">Seccion:</label>
					<input type="text" class="form-control" id="" name="seccion" placeholder="Seccion">
				</div>
				
		</div>

		<div class="caja2">
		  		<div class="form-group">
					<label for="">Año Inicial:</label>
					<input type="text" class="form-control" id="fechainicio" name="fechaextremainicio" placeholder="Solo Año">
				</div>
				<div class="form-group">
					<label for="">Año final:</label>
					<input type="text" class="form-control" id="fechafinal" name="fechaextremafinal" placeholder="Solo Año">
				</div>
				<div class="form-group">
					<label for="">Expediente Inicial:</label>
					<input type="text" class="form-control" id="exp_inicial" name="expedienteinicio" placeholder="Numero de Expediente">
				</div>				
				<div class="form-group">
					<label for="">Expediente Final:</label>
					<input type="text" class="form-control" id="exp_final" name="expedientefinal" placeholder="Numero de Expediente">
				</div>				
				<button type="submit" class="btn btn-primary">Crear Proyecto (Caja)</button>
			</form>
		</div>
		<div class="caja3">
		  	
		</div>
		<div class="caja4">
		  	
		</div>
	</div>

<?php include("footer.php"); ?>