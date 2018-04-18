<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title> Contacto </title>
	<link rel="stylesheet" type="text/css" href="../css/basic.css"/>
	<link rel="stylesheet" type="text/css" href="../css/contacto.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css"/>

	<meta charset = "utf-8">	
</head>

<body>
<div id = "contenedor">
	<?php include('navbar.php'); ?>
		

<h2>Formulario de contacto</h2>
<div class="contenedor">


	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.0168385987704!2d-3.735701084158337!3d40.452764279360935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229d2a9f08b1f%3A0xcf68cce94ec84cb8!2sUCM+Facultad+de+Inform%C3%A1tica!5e0!3m2!1ses!2ses!4v1523305676435" frameborder="0" style="border:0" allowfullscreen></iframe>
	

	<form action = "mailto:catanos@apwebs.es" method= "post" enctype="text/plain">
		<fieldset>
			<label for="name">Nombre</label>
			<input type = "text" id = "name" name = "nombre"><br>

			<label for="name">Dirección de contacto</label>
			<input type ="email" name = "mail" placeholder="tuemail@example.com"><br>
		</fieldset>

		
		<fieldset>
			<legend> Motivo de la consulta </legend>
				<input type = "radio" name = "opc" value="evaluacion">Evaluación<br>
				<input type = "radio" name = "opc" value = "sugerencias">Sugerencias<br>
				<input type = "radio" name = "opc" value = "criticas">Críticas<br>
		</fieldset>
		
		<fielset>
		
			<br>
			<input type = "checkbox" name = "check" value = "terminos">Marque esta casilla para verificar que ha leído nuestros <a href = "terminos.html">términos y condiciones del servicio</a><br>
		</fieldset>
		<br>
	<input type="submit" name="Enviar" value = "Enviar"> 
</form>
</div>
</div>
</body>
</html>