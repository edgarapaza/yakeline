<?php
require("../models/catalogo.model.php");
$idcaja = $_POST['idcaja'];
$direccion = $_POST['direccion'];
$codreferencia = $_POST['codreferencia'];
$seccion = $_POST['seccion'];
$titulo = $_POST['titulo'];
$fecdocumento = $_POST['fecdocumento'];
$nivdescrip = $_POST['nivdescrip'];
$volunimed = $_POST['volunimed'];
$productor = $_POST['productor'];
$formaingreso = $_POST['formaingreso'];
$contenido = $_POST['contenido'];
$dimensiones = $_POST['dimensiones'];
$conservacion = $_POST['conservacion'];
$instdescrip = $_POST['instdescrip'];
$estadoconservacion = $_POST['estadoconservacion'];
$copias = $_POST['copias'];
$notas = $_POST['notas'];
$persdescripcion = $_POST['persdescripcion'];
$persdirector = $_POST['persdirector'];
$persrevisor = $_POST['persrevisor'];
$fecdescripcion = $_POST['fecdescripcion'];
$fecfinalizacion = $_POST['fecfinalizacion'];
$estado = $_POST['estado'];
$obs = $_POST['obs'];

$catalogo = new Catalogo();
$catalogo->Guardar($idcaja, $direccion, $codreferencia, $seccion, $titulo, $fecdocumento, $nivdescrip, $volunimed, $productor, $formaingreso, $contenido, $dimensiones, $conservacion, $instdescrip, $estadoconservacion, $copias, $notas, $persdescripcion, $persdirector, $persrevisor, $fecdescripcion, $fecfinalizacion, $estado, $obs);

header("Location: ../index.php");
?>

<script type="text/javascript">
  window.close();
</script>