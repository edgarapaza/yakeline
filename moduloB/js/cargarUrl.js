$(document).ready(function(){

	$("#catalogo").click(function(){
		$("#cuerpo").load("../catalogo.php");
	});

	$("#estadisticas").click(function(){
		$("#cuerpo").load("#");
	}); 
});