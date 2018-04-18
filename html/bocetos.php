<?php session_start(); ?>
<!DOCTYPE html>
<html lang = "es">

<head>

	<meta charset="utf-8">
	<title>Bocetos del proyecto</title>
	<meta name="description" content="bocetos del proyecto,vinoteca,cata de vinos,cata">
	<link rel="stylesheet" type="text/css" href="../css/basic.css">
	<link rel="stylesheet" type="text/css" href="../css/bocetos.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
</head>

<body>
	<div id="contenedor">

	<?php include('navbar.php'); ?>

	<h1>Galería de Bocetos</h1>
		
	<table>
		<tr>
		 	<td><p>Boceto 1</p><img src="../Img/img1.png" alt="Boceto 1"/></td>
		 	<td><p>Boceto 2</p><img src="../Img/img2.png" alt="Boceto 2"/></td>
		</tr>
		<tr>
			<td><p>Boceto 3</p><img src="../Img/img3.png" alt="Boceto 3"/></td>
		 	<td><p>Boceto 4</p><img src="../Img/img4.png" alt="Boceto 4"/></td>
		</tr>
		<tr>
			<td><p>Boceto 5</p><img src="../Img/img5.png" alt="Boceto 5"/></td>
		 	<td><p>Boceto 6</p><img src="../Img/img6.png" alt="Boceto 6"/></td>
		</tr>
		<tr>
			<td><p>Boceto 7</p><img src="../Img/img7.png" alt="Boceto 7"/></td>
		</tr>
	
	</table>
</div>
</html>