<?php
include "header.php";
require_once("./models/caja.model.php");

$caja = new Caja();
$data = $caja->Consultar(1);

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
		  		<?php
		  			$i=1;
		  			while ($fila = $data->fetch_array(MYSQLI_ASSOC)):
		  		?>
		  			<tr>
		  				<td><?php echo $i; ?></td>
		  				<td><?php echo $fila['caja']; ?></td>
		  				<td><?php echo $fila['seccion']; ?></td>
		  				<td><?php printf("%s a %s",$fila['inicio'], $fila['final']) ?></td>
		  				<td><?php printf("Exp. %s al Exp. %s",$fila['exp1'], $fila['exp2']) ?></td>

		  				<td class="color">Abierto</td>
		  				<td>
		  					<a href="catalogo.php?idcaja=<?php echo $fila['idcaja']; ?>" class="btn btn-success">CONTINUAR</a>
		  					<a href="catalolo_change.php?idcaja=1">Modificar</a>
		  				</td>
		  			</tr>
		  		<?php $i++; endwhile; ?>
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