<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tianguis Alternativo</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
	
	
	<script type="text/javascript" src="js/app.js"></script>

	<!-- <link rel="shortcut icon" type="image/png" href="images/favicon.png"/> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Enriqueta:wght@500&display=swap" rel="stylesheet">
</head>

<body>
	<div class="header">
		<img src="img/logoTAPblanco.png">
	</div>

	<?php
		$link = mysqli_connect("localhost", "_fernando", "%4%q7rIxssl!", "basededatos_");
		if(isset($_POST['submit_button']))
		{
			mysqli_query($link, 'TRUNCATE TABLE `turnos`');
			header("Location: " . $_SERVER['PHP_SELF']);
			exit();
		}

	?>

	<div class="container">
	<h1>Borrar datos de la tabla</h1>
		<p>Al presionar el botón, se borrarán permanentemente los datos de la tabla de turnos</p>
			
		<form method="post" action="">
    		<input name="submit_button" type="submit" value=" Resetear tabla " />
		</form>
		<div>
		<h2><a href="http://dev.dasac.org">Regresar</a></h2>
	</div>
	</div>


</body>


</html>
