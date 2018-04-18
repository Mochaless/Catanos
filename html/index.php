<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="../css/basic.css"/>
	<link rel="stylesheet" type="text/css" href="../css/index.css"/>
	<link rel="stylesheet" type="text/css" href="../css/navbar.css"/>	
</head>
<body>

	<div id ="contenedor">
	<?php include('navbar.php'); ?>
		
	<div id="portada">
		<h1> Cátanos </h1><br>
		<img src ="../img/logo.PNG" alt="Logo"/>
		<div id="text">

		<p> Nuestra aplicación ofrece a las empresas productoras de vino una plataforma a través de la
		cual se darán a conocer al usuario.
		También permitirá que estas empresas puedan añadir sus propios vinos como candidatos a
		posibles catas que realizarán un tipo determinado de usuarios.
		Estas catas serán organizadas por un administrador , en ellas se indicará el número de
		participantes , la localización , la fecha y los posibles productos o descuentos con los que las
		productoras recompensarán a los catadores.
		Para poder apuntarse a una cata el usuario deberá estar registrado en la web y haberse
		inscrito dentro del plazo ofertado.
		Una vez cerrada y realizada la cata (presencial) los catadores deberán rellenar algún tipo de
		encuesta o formulario con la opiniòn que esta le merezca.
		Tras esto se publicará en la web un resumen sobre la cata que ha tenido lugar y los usuarios
		registrados en la web podrán publicar sus opiniones (comentarios) en el mismo artículo
		</p>
		
		<br>
	</div>
	</div>

</body>
</html>