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
		<div class="caja2">
		  	
		</div>
		<div class="caja3">
		  	
		</div>
		<div class="caja4">
		  	
		</div>
	</div>

<?php include("footer.php"); ?>