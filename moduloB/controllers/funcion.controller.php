<?php
require("../models/funcion.model.php");

$funcion = $_POST['funcion'];
$idpersonal = $_POST['idpersonal'];
$fecinicio = $_POST['fecinicio'];
$feccese = $_POST['feccese'];

$func = new Funcion();
$func->Guardar($funcion, $idpersonal, $fecinicio, $feccese);

header("Location: ../index.php");
?>

<script type="text/javascript">
  window.close();
</script>