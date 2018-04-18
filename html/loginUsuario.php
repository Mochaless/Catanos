<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/basic.css"/>
	<link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
	<link rel="stylesheet" type="text/css" href="../css/loginUSEM.css"/>
	<title>Iniciar sesión</title>
</head>
<body>

	<div id ="contenedor">
	<?php include('navbar.php'); ?>

		<h1>Usuario</h1>
		<form action = "procesarLoginUsuario.php" method ="POST">
			<fieldset>
				<legend>Usuario y contraseña</legend>
				<p>	Nombre: </p>
				<input type ="text" name ="user" id ="user" required>
				<p> Contraseña: </p>
				<input type ="password" name = "pass" id ="pass" required><br>
				
				<input type ="submit" value = "Siguiente" id = "siguiente">
			</fieldset>
		</form>
	</div>
</body>
</html>