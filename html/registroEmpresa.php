<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registro Empresa</title>
	<link rel="stylesheet" type="text/css" href="../css/basic.css"/>
	<link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
	<link rel="stylesheet" type="text/css" href="../css/loginUSEM.css"/>
</head>
<body>
	<div id = "contenedor">

		<?php include('navbar.php'); ?>
		
		<h1>Registrar Empresa</h1>

		<form action = "signupEmpresa.php" method ="POST" enctype="multipart/form-data">
			<fieldset>
				<legend>Datos de registro</legend>
				<p>	CIF: </p>
				<input type ="text" name = "cif" id ="cif" required>
				<p>	Nombre: </p>
				<input type ="text" name = "name" id ="name" required>
				<p> Contraseña: </p>
				<input type ="password" name = "pass" id ="pass" required>
				<p>	Ciudad: </p>
				<input type ="text" name = "ciudad" id ="ciudad" >
				<p>	País: </p>
				<input type ="text" name = "pais" id ="pais">
				<p>	Información: </p>
				<textarea name = "info" rows="7" cols="40" id ="info" placeholder="Escribe tu información:"></textarea>
				<p>	Logo: (opcional)</p>
				<input type="file" size="60" name="logo" id="logo" ><br><br>
				
				<input type ="submit" value = "Registrar" >
			</fieldset>
		</form>
	</div>
	
</body>
</html>