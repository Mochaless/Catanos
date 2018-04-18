<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registro Usuario</title>
	<link rel="stylesheet" type="text/css" href="../css/basic.css"/>
	<link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
	<link rel="stylesheet" type="text/css" href="../css/loginUSEM.css"/>
</head>
<body>
	<div id = "contenedor">

		<?php include('navbar.php'); ?>

		<h1>Registrar Usuario</h1>
		<form action = "signupUser.php" method ="POST" enctype="multipart/form-data">
			<fieldset>
				<legend>Datos de registro</legend>
				<p>	Email: </p>
				<input type ="text" name = "mail" id ="mail" required>
				<p>	Nombre: </p>
				<input type ="text" name = "user" id ="user" required>
				<p> Contraseña: </p>
				<input type ="password" name = "pass" id ="pass" required>
				<p>	Nick: </p>
				<input type ="text" name = "nick" id ="nick">
				<p>	Foto: (opcional)</p>
				<input type="file" size="60" name="foto" id="foto" ><br><br>

				<input type ="submit" value = "Registrar">
			</fieldset>
		</form>
	</div>

</body>
</html>