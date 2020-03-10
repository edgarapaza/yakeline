<!DOCTYPE html>
<html>
<head>
	<title>grid</title>
	<style type="text/css">
		.parent {
			display: grid;
			grid-template-columns: 2fr repeat(5, 1fr);
			grid-template-rows: repeat(2, 1fr);
			grid-column-gap: 5px;
			grid-row-gap: 5px;
		}

		.color{
			background: #102D9F;
			height: 100px;
			color: white;
		}


		.div2 { grid-area: 1 / 1 / 2 / 2; }
		.div4 { grid-area: 1 / 2 / 2 / 7; }
		.div5 { grid-area: 2 / 2 / 3 / 3; }
		.div6 { grid-area: 2 / 3 / 3 / 4; }
		.div7 { grid-area: 2 / 4 / 3 / 5; }
		.div8 { grid-area: 2 / 5 / 3 / 6; }
		.div9 { grid-area: 2 / 6 / 3 / 7; }

		.cabecera{
			display: flex;
			flex-direction: column;
			align-content: space-between;
		}
		.izquierda{
			background-color: #DF7171;
			border: 1px solid #000;
			border-radius: 10px;
			padding: 5px;
		}

		@media screen and (max-width: 760px){
			.div5{
				background: red;
				
			}	
		}

	</style>
</head>
<body>
	<div class="parent">
		
		<div class="div2 izquierda">
			<img src="">
			<h3>Personal</h3>
			<div id="form1">
				<p>N° Caja:</p>
				<input type="text" name="">
				<p>Titulo:</p>				
				<input type="text" name="">
				<br>
				<button>Buscar</button>
				<button>Cerrar</button>

			</div>

			<hr>

			<button>Cerrar Caja</button>
			<button>Buscar</button>
			<button>Catalogo</button>

		</div>
		
		<div class="div4 color">
			<h2>FONDO DOCUMENTAL : INTENDENCIA</h2>
			<div class="cabecera">
				
				<div class="codigo">
					<label><em>Codigo de Referencia</em></label>

				</div>

				<div class="botones">
					<button>Nuevo</button>
					<button>Guardar</button>
					<button>Salir</button>
					
				</div>
			</div>
		</div>
		<div class="div5 color"> 5</div>
		<div class="div6 color"> 6</div>
		<div class="div7 color"> 7</div>
		<div class="div8 color"> 8</div>
		<div class="div9 color"> 9</div>
	</div>
</body>
</html>