<!DOCTYPE html>
<html>
<head>
	<meta charset ="utf-8">
	<title>Iniciar sesión</title>
	<link rel="stylesheet" type="text/css" href="../css/basic.css"/>
	<link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
	<link rel="stylesheet" type="text/css" href="../css/loginUSEM.css"/>
</head>
<body>

	<div id = "contenedor">
	<?php include('navbar.php'); ?>

		<h1>Empresa</h1>
		<form action = "procesarLoginEmpresa.php" method ="POST">
			<fieldset>
				<legend>Usuario y contraseña</legend>
				<p>	Nombre: </p>
				<input type ="text" name = "user" id ="user" required>
				<p> Contraseña: </p>
				<input type ="password" name = "pass" id ="pass" required><br>
				
				<input type ="submit" value = "Entrar">
			</fieldset>
		</form>
	
</div>
</body>
</html>