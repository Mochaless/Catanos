<!Doctype html>

<html lang="es">

<head>

	<meta charset="utf-8">
	<title>Detalles del proyecto</title>
	<link rel="stylesheet" type="text/css" href="../css/basic.css"/>
	<link rel="stylesheet" type="text/css" href="../css/detalles.css">
	<link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
	<meta name="description" content="Detalles del proyecto,vinoteca,cata de vinos,cata">

</head>

<body>
		<div id = "contenedor">
			<?php include('navbar.php'); ?>

	<h1>Detalles del proyecto</h1>

	<h2>Introducción</h2>

		<p>
				Nuestra aplicación ofrece a las empresas productoras de vino una plataforma  a través de la cual se darán a conocer al usuario.
			También permitirá que estas empresas puedan añadir sus propios vinos como candidatos a posibles catas que realizarán un tipo determinado de usuarios.
			Estas catas serán organizadas por un administrador , en ellas se indicará el número de participantes , la localización , la fecha y los posibles productos o descuentos con los que las productoras recompensarán a los catadores.
		</p>	

		<p>
			Para poder apuntarse a una cata el usuario deberá estar registrado en la web y haberse inscrito dentro del plazo ofertado.
			Una vez cerrada y realizada la cata (presencial) los catadores deberán rellenar algún tipo de encuesta o formulario con la opiniòn que esta le merezca.
			Tras esto se publicará en la web un resumen sobre la cata que ha tenido lugar y los usuarios registrados en la web podrán publicar sus opiniones (comentarios) en el mismo artículo.
		</p>

	<h2>Tipos de usuarios</h2>
		
		<ul id="admin" class = "usuarios">
			<li>Administrador: Organiza las catas.</li>
		</ul>
		<ul id="producto" class="usuarios">	
			<li>Productoras: Añaden información sobre su empresa , vinos y ofertas.</li>
		</ul>
		<ul id="cata" class="usuarios">
			<li>Catadores: Son usuarios registrados, valoran vinos y pueden escribir comentarios.</li>
		</ul>
		<ul id="visit" class="usuarios">
			<li>Visitantes: No pueden apuntarse a catas pero si ver los resúmenes de éstas y comentar.</li>
		</ul>
			

	<h2>Secciones propuestas</h2>

		<ul class="secciones">	
			<li>Inicio : Mostrará noticias relaccionadas con la temática o el sector vinícola y contenido reciente añadido en la web.</li>

			<li>Vinoteca : Se mostrará un catálogo con  los vinos que ofrecen las distintas productoras, si el vino se selecciona se mostrará la información y las opiniones que los usuarios tienen sobre cada vino.</li>

			<li>Suscribirse a una cata : Esta pestaña no se encuentra visible para usuarios no registrados , en ella aparecerá la información sobre las nuevas catas organizadas.</li>

			<li>Productores: Se mostrarán empresas que colaboran con la web, así como su información y premios a los mejores vinos.</li>

			<li>Sobre nosotros: Aparecerá información sobre nuestra “empresa”.</li>

			<li>Contáctanos : Un formulario que permite a las empresas productoras ponerse en contacto con nosotros para futuras colaboraciones.</li>
		</ul>

	<h2>Páginas similares</h2>
		
		<ul class="paginas">
			<li><a href="https://turismodevino.com">turismodevino.com</a></li>
			<li><a href="https://www.gourmetmadrid.com">www.gourmetmadrid.com</a></li>
			<li><a href="http://vivancoculturadevino.es/es">vivancoculturadevino.es</a></li>
		</ul>
	</div>
</body>

</html>