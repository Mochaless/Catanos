<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Registro</title>
	<link rel="stylesheet" type="text/css" href="../css/basic.css"/>
	<link rel="stylesheet" type="text/css" href="../css/login.css"/>
	<link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
</head>
<body>
	<div id = "contenedor">

		<?php include('navbar.php'); ?>

	<div id ="contenido">
		<h2>Registrate</h2>

		<div id="user">
			<h3>Catador</h3>
			<p>Aprovechate de todas las ventajas de ser un catador</p>
			<button type = "button" id ="signupUser" onclick="location.href = 'registroUser.php'">Regístrate como catador</button>
		</div>

		<div id="empresa">
			<h3>Empresa</h3>
			<p>Presenta tus nuevos vinos y compite por los premios</p>
			<button type = "button" id ="signupEmpresa" onclick="location.href = 'registroEmpresa.php'">Regístrate como empresa</button>
		</div>
	</div>
	</div>
</body>
</html>