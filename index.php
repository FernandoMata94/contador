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
		<h1>¡Bienvenidos!</h1>
		<p>Para tomar un turno, por favor ingrese su nombre completo, ¡Gracias!</p>
		
		<form action="insert.php" method="post">
			<div>
				<label for="firstName"><p>Nombre completo:</p></label>
				<input type="text" name="first_name" id="firstName" placeholder="Ingrese aquí su nombre completo" required>
			</div>
   
    		<input type="submit" value="Tomar turno">
		</form>
	</div>

	<?php
		/* conexion sql*/
		$link = mysqli_connect("localhost", "_fernando", "%4%q7rIxssl!", "basededatos_");
		
		// 
		if($link === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		
		// 
		$sql = "SELECT * FROM turnos" ;
		if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){
				echo "<table id='tabla'>";
					echo "<tr>";
						echo "<th>Turno</th>";
						echo "<th>Nombre</th>";
						
					echo "</tr>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
						echo "<td>" . $row['Id'] . "</td>";
						echo "<td>" . $row['Nombre'] . "</td>";
						
					echo "</tr>";
				}
				echo "</table>";
				
				mysqli_free_result($result);
			} else{
				echo "<table id='tabla'>";
					echo "<tr>";
						echo "<th>Turno</th>";
						echo "<th>Nombre</th>";
					echo "</tr>";
					echo "<tr>";
						echo "<td>¡Aún no hay turnos que mostrar!</th>";
						echo "<td>¡Aún no hay nombres que mostrar!</th>";
					echo "</tr>";
			}
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
		
		// 
		mysqli_close($link);
	?>

</body>
</html>