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
		  	<h2>FONDO DOCUMENTAL: LISTADO DE CAJAS (Proyectos) ABIERTOS</h2>
			<p>Solo puede trabajar en 2 proyectos al mismo tiempo.  Se sugiere que termine de describir una caja, luego proceda a cerrarla y posteriormente puede crear un nuevo proyecto con una caja nueva.</p>
		  	<table class="table table-responsive table-inverse">
		  		<thead>
		  			<tr>
		  				<th>Nro.</th>
		  				<th>Numero de Caja</th>
		  				<th>Seccion</th>
		  				<th>Fechas Extremas</th>
		  				<th>Expedientes</th>
		  				<th>Estado</th>
		  				<th>Opc.</th>
		  			</tr>
		  		</thead>

		  		<tbody>
		  			<tr>
		  				<td>1</td>
		  				<td>Caja 006</td>
		  				<td>Causa Civil</td>
		  				<td>1821 a 1824</td>
		  				<td>Exp. 123 al Exp. 240</td>
		  				<td class="color">Abierto</td>
		  				<td>
		  					<a href="catalogo.php?idcaja=1" class="btn btn-success">CONTINUAR</a>
		  					<a href="catalolo_change.php?idcaja=1">Modificar</a>
		  				</td>
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