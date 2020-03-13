<?php
session_start();
include("header.php");
require("../moduloB/models/catalogo.model.php");
require("../moduloB/models/caja.model.php");

$idcaja = $_REQUEST['idcaja'];
//$idpersonal = $_SESSION['idpersonal'];
$idpersonal = 1;
$idjefearea = 3;		

if(!empty($idcaja) && isset($idpersonal)){
	
	$catalogos = new Catalogo();
	$data = $catalogos->Consultar($idcaja);

	$caja_class = new Caja();
	$datosCaja = $caja_class->ConsultarCaja($idcaja);

	$data2 = $catalogos->ConsultarPersonal();
	$data3 = $catalogos->ConsultarPersonal();
	$data4 = $catalogos->ConsultarPersonal();

?>

<form action="controllers/catalogo.controller.php" method="POST" role="form">
	<div class="grid-container">
  <div class="izquierda">
  	<img src="img/user.png">
  	<p>Personal</p>
  	<hr>	
  </div>
  <div class="encabezado">
  	<h4>FONDO DOCUMENTAL: INTENDENCIA</h4>
  	<p></p>
  	<p>Personal: Chester Zamudio</p>
  </div>
  <div class="caja1">
		<fieldset>
			<legend>CODIGO DE REFERENCIA</legend>
			<div class="form-group">
				<label for="">
					PE/ARP/<?php echo $datosCaja['fondo']; ?>
					/<?php echo $datosCaja['caja'];?>
				
				</label>
				
			</div>
		</fieldset>	
		<fieldset>
			<legend>AREA DE IDENTIFICACION</legend>
			<div>
				<label for="">Archivo :</label>
				<input type="text" name="idcaja" value="<?php echo $idcaja;?>">
				<select name="direccion" id="" class="form-control">
					<option value="AH" selected="selected">Archivo Historico</option>
					<option value="AI">Archivo Intermedio</option>
				</select>
			</div>
			<div>
				<label for="">Caja / Unidad de Archivamiento :</label>
				<input type="text" name="codreferencia" class="form-control" value="<?php echo $datosCaja['caja']; ?>">
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
				<textarea type="text" class="form-control" id="" name="contenido" cols="30" rows="17" placeholder="Alcance y contenido"> </textarea>
			</div>
		</fieldset>
  	
  </div>
  <div class="caja3">
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
  </div>
  <div class="caja4">
  	<fieldset>
			<legend>AREA DE CONTROL DE DESCRIPCION</legend>
			<div class="form-group">
				<label for="">Descripcion a Cargo de:</label>
				<input type="text" name="persdescripcion" value="<?php echo $idpersonal;?>">
				<p>Chester Zamudio</p>
				
			</div>
			<div class="form-group">
				<label for="">Direccion a cargo de:</label>
				<input type="text" name="persdirector" value="<?php echo $idjefearea;?>">
				<p>Sonia Sotomayor</p>
			</div>
			<div class="form-group">

				<label for="">Observaciones:</label>
				<textarea type="" class="form-control" id="" name="obs" placeholder="Observaciones"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">GUARDAR</button>


		</fieldset> 
  </div>

</div>

</form>


<?php
include("footer.php");

}else{
	echo "faltan datos";
	header("location: caja_listado.php");
}
?>