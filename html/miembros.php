<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Miembros</title>
	<link rel="stylesheet" type="text/css" href="../css/basic.css"/>
	<link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
</head>
<body>
	<div id = "contenedor">
	<div>
		<div><?php 
		include('navbar.php'); 
		?></div>
		<div>
			<ul>  
				<li ><a href="#alex">Alejandro</a></li>
				<li ><a href="#pablo" >Pablo</a></li>
				<li ><a href="#javi" >Javier</a></li>

			</ul>
			<div id="informacion">
				<div id="alex">
					<h3>Alejandro Moreno Palma</h3>
					<p>almore05@ucm.es</p>
					<IMG SRC="../Img/alex.jpg" alt="Alex"/>
					<p>Intereses: Me gustan los deportes y tics (Tecnologías de la información y la comunicación).</p>
				</div>
				<div id="pablo">
					<h3>Pablo García-Mochales Sánchez-Celemín</h3>
					<p>pabGar08@ucm.es</p>
					<IMG SRC="../Img/pablo.jpg" alt="Pablo">
					<p>Intereses: Quiero terminar la carrera y en mis ratos libres toco la guitarra.</p>
				</div>
				<div id="javi">
					<h3>Javier de la Oliva Sánchez-Valladares</h3>
					<p>jaoliva@ucm.es</p>
					<IMG SRC="../Img/javi.jpg" alt="Javi">
					<p>Intereses: Me gusta la música y las nuevas tecnologias.</p>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>