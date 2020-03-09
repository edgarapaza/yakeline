<?php
require("../models/caja.model.php");

$idpersonal = $_POST['idpersonal'];
$caja = $_POST['caja'];
$fondo = $_POST['fondo'];
$seccion = $_POST['seccion'];
$fechaextrema = $_POST['fechaextrema'];
$fecCreated = $_POST['fecCreated'];
$estado = $_POST['estado'];
$fecCierre = $_POST['fecCierre'];

$cajas = new Caja();
$cajas->Guardar($idpersonal, $caja, $fondo, $seccion, $fechaextrema, $fecCreated, $estado, $fecCierre);

header("Location: ../index.php");
?>

<script type="text/javascript">
  window.close();
</script>