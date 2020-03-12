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
		  	<p>Listado de proyectos Abiertos</p>
				<br>
		  	<table class="table table-responsive table-inverse">
		  		<thead>
		  			<tr>
		  				<th>Nro.</th>
		  				<th>Numero de Caja</th>
		  				<th>Fechas Extremas</th>
		  				<th>Estado</th>
		  				<th>Opc.</th>
		  			</tr>
		  		</thead>
		  		<tbody>
		  			<tr>
		  				<td>1</td>
		  				<td>Caja 006</td>
		  				<td>1821 a 1824</td>
		  				<td>Abierto</td>
		  				<td><button>Continuar</button></td>
		  			</tr>
		  		</tbody>
		  	</table>
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

<?php include("footer.php"); ?>