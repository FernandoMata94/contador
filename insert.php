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

	<div class="container">
	<?php
	
	$link = mysqli_connect("localhost", "_fernando", "%4%q7rIxssl!", "basededatos_");
	
	
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
	
	$first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);


	
	$sql = "INSERT INTO turnos (Nombre) VALUES ('$first_name')";
	if(mysqli_query($link, $sql)){
		$last_id = mysqli_insert_id($link);
		echo "<h2>¡Muchas gracias $first_name !</h2> <br> <h2>Su turno es el: $last_id</h2> ";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	
	
	mysqli_close($link);
	?>
	<div>
		<h2><a href="http://estudiopuntoylinea.com/QR/index.php">Regresar</a></h2>
	</div>
	</div>



</body>


</html>