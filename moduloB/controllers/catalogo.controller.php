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
$obs = $_POST['obs'];


$catalogo = new Catalogo();
$catalogo->Guardar($idcaja, $direccion, $codreferencia, $seccion, $titulo, $fecdocumento, $nivdescrip, $volunimed, $productor, $formaingreso, $contenido, $dimensiones, $conservacion, $instdescrip, $estadoconservacion, $copias, $notas, $persdescripcion, $persdirector, $obs);

header("Location: ../index.php");


/*echo $idcaja."<br>" ;
echo $direccion."<br>" ;
echo $codreferencia."<br>" ;
echo $seccion."<br>" ;
echo $titulo."<br>" ;
echo $fecdocumento."<br>" ;
echo $nivdescrip."<br>" ;
echo $volunimed."<br>" ;
echo $productor."<br>" ;
echo $formaingreso."<br>" ;
echo $contenido."<br>" ;
echo $dimensiones."<br>" ;
echo $conservacion."<br>" ;
echo $instdescrip."<br>" ;
echo $estadoconservacion."<br>" ;
echo $copias."<br>" ;
echo $notas."<br>" ;
echo $persdescripcion."<br>" ;
echo $persdirector."<br>" ;
echo $obs."<br>" ;*/