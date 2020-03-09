<?php
require("../models/funcion.model.php");

$funcion = $_POST['funcion'];
$idpersonal = $_POST['idpersonal'];
$fecinicio = $_POST['fecinicio'];
$feccese = $_POST['feccese'];

$funcion = new Funcion();
$funcion->Guardar($funcion, $idpersonal, $fecinicio, $feccese);

header("Location: ../index.php");
?>

<script type="text/javascript">
  window.close();
</script>