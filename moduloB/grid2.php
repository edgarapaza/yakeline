<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<style type="text/css">
		.grid-container {
		  display: grid;
		  grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
		  grid-template-rows: 1fr 1fr;
		  grid-template-areas: "izquierda cabecera cabecera cabecera cabecera" 
		                       "izquierda caja1  caja2  caja3  caja4 ";
		  grid-gap: 5px;
		}

		.izquierda { grid-area: izquierda; 
			background-color: #D6D6D6;
			padding: 5px;
			color: white;
			height: 300px;
		}

		.cabecera { 
			grid-area: cabecera;
			background-color: gray;
			color: white;
		}

		.caja1  { grid-area: caja1 ; }

		.caja2  { grid-area: caja2 ; }

		.caja3  { grid-area: caja3 ; }

		.caja4  { grid-area: caja4 ; }
	</style>
</head>
<body>

	<div class="grid-container">
	  <div class="izquierda">izquierda
	  	<input type="text" name="" placeholder="hola">
	  	<button class="btn btn-primary">Buscar</button>
	  </div>
	  <div class="cabecera">Cabecera</div>
	  <div class="caja1 ">caja1</div>
	  <div class="caja2 ">caja2</div>
	  <div class="caja3 ">caj3</div>
	  <div class="caja4 ">caja4</div>
	</div>
	
</body>
</html>