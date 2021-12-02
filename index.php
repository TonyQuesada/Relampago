<?php
require('db.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>Tarea SASS</title>
	<link rel="stylesheet" type="text/css" href="css/botones.css">
	<link rel="stylesheet" type="text/css" href="css/btn.css">
	<link rel="stylesheet" type="text/css" href="css/tablas1.css">
	<link rel="stylesheet" type="text/css" href="css/card1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js" integrity="sha512-NhRZzPdzMOMf005Xmd4JonwPftz4Pe99mRVcFeRDcdCtfjv46zPIi/7ZKScbpHD/V0HB1Eb+ZWigMqw94VUVaw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>


<body>

	<div class="tabla-position">
		<br>
		<table class="table-latitude">
			<caption>Resultados Generales</caption>
			<thead>
				<tr>
					<th>Departamento</th>
					<th>Puntaje Obtenido</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM Departamentos";
				$result = mysqli_query($db_connection, $sql);
				while ($row = mysqli_fetch_assoc($result)) {
					echo
					"<tr>
							<td>" . $row["NombreDepartamento"] . "</td>
							<td>" . $row["TotalXDepartamento"] . "</td>
						</tr>";
				}
				?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan=3>Índice general de madurez del sistema de control interno</td>
				</tr>
			</tfoot>
		</table>

	</div>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="departamento" id="departamento">

			<?php

			$sql = "SELECT * FROM Departamentos";
			$result = mysqli_query($db_connection, $sql);
			echo "<option selected disabled> Seleccionar </option>";
			while ($row = mysqli_fetch_array($result)) {
				echo "<option value=\"" . $row["NombreDepartamento"] . "\">" . $row["NombreDepartamento"] . "</option>";
			}
			?>
		</select>
		<button class="button">Mostrar</button>
	</form>


	<?php if (isset($_POST['departamento'])) { ?>

		<?php

		$sql = "SELECT * FROM Componentes";
		$result = mysqli_query($db_connection, $sql);
		if ($result) {
			$componente = mysqli_fetch_assoc($result);
		}

		?>

		<?php
		$sql = "SELECT * FROM Departamentos";
		$result = mysqli_query($db_connection, $sql);
		while ($row = mysqli_fetch_assoc($result)) {
		
		}
		?>
  
		<div class="contenedor">
		
			<section class="card-container">
				<article class="c-card c-card--wide" id="a">
					<header class="c-card__header">
						<!-- <img src="http://placehold.it/300x250" class="c-card__image" alt="Card Image" />-->
						<div class="circular-process">
							<input class="circle" id="circulo1" name="circulo1" type="text" value=70>
						</div>
					</header>

					<div class="c-card__body">

						<h2 class="c-card__title">
							Ambiente de control
						</h2>
						<p class="c-card__intro">
							Ejes:
						<p class="c-card__intro" style="margin-left: 10%;">
							> Compromiso:60 </br>
							> Ética:80 </br>
							> Personal:100 </br>
							> Estructura:40
						</p>
						</p>


					</div>
					<footer class="c-card__footer">
						Período: 01/12/2021
					</footer>
				</article>

				<article class="c-card c-card--wide" id="b">
					<header class="c-card__header">
						<!-- <img src="http://placehold.it/300x250" class="c-card__image" alt="Card Image" />-->
						<div class="circular-process">
							<input class="circle" id="circulo1" name="circulo1" type="text" value=<?php echo 55 ?>>
						</div>
					</header>

					<div class="c-card__body">

						<h2 class="c-card__title">
							Valoración de riesgo
						</h2>
						<p class="c-card__intro">
							Ejes:
						<p class="c-card__intro" style="margin-left: 10%;">
							> Marco orientador:80 </br>
							> Herramienta para la administracion de la informacion:20 </br>
							> Funcionanmiento del sistema especifico y Valoracion de riesgo institucional:20 </br>
							> Documentacion y comunicación:100
						</p>
						</p>


					</div>
					<footer class="c-card__footer">
						Período: 01/12/2021
					</footer>
				</article>

				<article class="c-card c-card--wide" id="c">
					<header class="c-card__header">
						<!-- <img src="http://placehold.it/300x250" class="c-card__image" alt="Card Image" />-->
						<div class="circular-process">
							<input class="circle" id="circulo1" name="circulo1" type="text" value=<?php echo 65 ?>>
						</div>
					</header>

					<div class="c-card__body">

						<h2 class="c-card__title">
							Actividades de control
						</h2>
						<p class="c-card__intro">
							Ejes:
						<p class="c-card__intro" style="margin-left: 10%;">
							> Caracteristicas:60 </br>
							> Alcance:20 </br>
							> Formalidadad:100 </br>
							> Aplicación:80
						</p>
						</p>


					</div>
					<footer class="c-card__footer">
						Período: 01/12/2021
					</footer>
				</article>

				<article class="c-card c-card--wide" id="d">
					<header class="c-card__header">
						<!-- <img src="http://placehold.it/300x250" class="c-card__image" alt="Card Image" />-->
						<div class="circular-process">
							<input class="circle" id="circulo1" name="circulo1" type="text" value=<?php echo 80 ?>>
						</div>
					</header>

					<div class="c-card__body">

						<h2 class="c-card__title">
							Sistemas de información
						</h2>
						<p class="c-card__intro">
							Ejes:
						<p class="c-card__intro" style="margin-left: 10%;">
							> Alcance:100 </br>
							> Calidad de la informacion:80 </br>
							> Calidad de laComunicacion:60  </br>
							> Control de los sistemas de informacion:80
						</p>
						</p>


					</div>
					<footer class="c-card__footer">
						Período: 01/12/2021
					</footer>
				</article>

				<article class="c-card c-card--wide" id="e">
					<header class="c-card__header">
						<!-- <img src="http://placehold.it/300x250" class="c-card__image" alt="Card Image" />-->
						<div class="circular-process">
							<input class="circle" id="circulo1" name="circulo1" type="text" value=<?php echo 90 ?>>
						</div>
					</header>

					<div class="c-card__body">

						<h2 class="c-card__title">
							Seguimiento
						</h2>
						<p class="c-card__intro">
							Ejes:
						<p class="c-card__intro" style="margin-left: 10%;">
							> Participantes en el seguimiento d econtrol interno:100</br>
							> Formalidad del seguimiento:100 </br>
							> Alcance del seguimiento:80 </br>
							> Contribucion del seguimiento a la mejora del sistema:80
						</p>
						</p>


					</div>
					<footer class="c-card__footer">
						Período: 01/12/2021
					</footer>
				</article>

			</section>

		</div>

	<?php } ?>
</body>
<script>
	$(document).ready(function() {
		$(".circle").knob({
			"min": 0,
			"max": 100,
			"width": 150,
			"height": 150,
			// "fgColor":"red",
			"bgColor": "gray",
			"readOnly": true,
			"displayInput": true
		});
		// var x; 
		// x = document.getElementById("circulo1").textContent;
		// if(x => "20")
		// {
		// 	document.getElementById("circulo1").style.color = "red";
		// }

	})
</script>

</html>