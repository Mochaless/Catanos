<div class="topnav">

  <a href="index.php">Home</a>
  <a href="miembros.php">Miembros</a>
  <a href="bocetos.php">Bocetos</a>
  <a href="planificacion.php">Planificación</a>
  <a href="detalles.php">Detalles</a>
  <a href="contacto.php">Contacto</a>

  <?php if(!isset($_SESSION['login'])):{ ?>
  	<a href="registro.php" id ="registro">Registro</a>
  	<a class ="active" href="login.php" id = "login">Login</a>

  <?php }else:{ ?>

    <?php if($_SESSION['admin'] == true):{ ?>
		<a href="cata.php" id ="crearCata">Crear</a>
	<?php } else: {if($_SESSION['empresa']==true): { ?>
        <a href="perfilempresa.php"><?php echo strtoupper($_SESSION['user']); ?></a>
	<?php } else: { ?>	
		<a href="perfilUsuario.php"><?php echo strtoupper($_SESSION['user']); ?></a>
    <?php }endif; }endif; ?>

    <a class ="active" href="logout.php" id = "logout">Logout</a>
 
 <?php }endif; ?>

</div>
