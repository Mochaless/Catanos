<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/basic.css"/>
<link rel="stylesheet" type="text/css" href="../css/login.css"/>
<link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
<meta charset="utf-8">
</head>

<body>

	<div id = "contenedor">
	<?php include('navbar.php'); ?>

	<div id ="contenido">
		<h2>Inicia sesión</h2>
		
		<div id="user">
			<h3>Catador</h3>
			<p>¡Entra ya! hay nuevas catas esperándote</p>
			<button type = "button" id ="loginUser" onclick="location.href = 'loginUsuario.php'">Inicio para usuarios</button>
		</div>

		<div id="empresa">
			<h3>Empresa</h3>
			<p>¿Alguna novedad que contar? ¡Entra y cuentanosla!</p>
			<button type = "button" id ="loginEmpresa" onclick="location.href = 'loginEmpresa.php'">Inicio para empresas</button>
		</div>
	</div>
	</div>

</body>
</html>