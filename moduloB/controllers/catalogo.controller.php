<?php
require("../models/catalogo.model.php");

$idcaja = trim(strtoupper($_POST['idcaja']));
$direccion = trim(strtoupper($_POST['direccion']));
$codreferencia = trim(strtoupper($_POST['codreferencia']));
$seccion = trim(strtoupper($_POST['seccion']));
$titulo = trim(strtoupper($_POST['titulo']));
$fecdocumento = trim(strtoupper($_POST['fecdocumento']));
$nivdescrip = trim(strtoupper($_POST['nivdescrip']));
$volunimed = trim(strtoupper($_POST['volunimed']));
$productor = trim(strtoupper($_POST['productor']));
$formaingreso = trim(strtoupper($_POST['formaingreso']));
$contenido = trim(strtoupper($_POST['contenido']));
$dimension = trim(strtoupper($_POST['dimension']));
$dimensiones = trim(strtoupper($_POST['dimensiones']));
$conservacion = trim(strtoupper($_POST['conservacion']));
$instdescrip = trim(strtoupper($_POST['instdescrip']));
$estadoconservacion = trim(strtoupper($_POST['estadoconservacion']));
$copias = trim(strtoupper($_POST['copias']));
$notas = trim(strtoupper($_POST['notas']));
$persdescripcion = trim(strtoupper($_POST['persdescripcion']));
$persdirector = trim(strtoupper($_POST['persdirector']));
$obs = trim(strtoupper($_POST['obs']));

$catalogo = new Catalogo();
$catalogo->Guardar($idcaja, $direccion, $codreferencia, $seccion, $titulo, $fecdocumento, $nivdescrip, $volunimed, $productor, $formaingreso, $contenido, $dimension, $dimensiones, $conservacion, $instdescrip, $estadoconservacion, $copias, $notas, $persdescripcion, $persdirector, $obs);

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