<div id="header">
  <nav class="mainNav">
    <ul id="navbar">

      <li class="nav" id="navHome">
        <a id="navb1" class="navb" href="../Html/index.php"><span>HOME</span></a>
      </li>

      <li class="nav" id="navEquipo">
        <a id="navb2" class="navb" href="../Html/miembros.php"><span>MIEMBROS</span></a>
      </li>

      <li class="nav" id="navBocetos">
        <a id="navb3" class="navb" href="../Html/bocetos.php"><span>BOCETOS</span></a>
      </li>

      <li class="nav" id="navPlan">
        <a id="navb4" class="navb" href="../Html/planificacion.php"><span>PLANIFICACION</span></a>
      </li>

      <li class="nav" id="navDetalles">
        <a id="navb5" class="navb" href="../Html/detalles.php"><span>DETALLES</span></a>
      </li>

      <li class="nav" id="navContacto">
        <a id="navb6" class="navb" href="../Html/contacto.php"><span>CONTACTO</span></a>
      </li>

      <?php if(!isset($_SESSION['login'])):{ ?>
      <li class="nav" id="Login">
        <a id="navb6" class="navb" href="../Html/login.php"><span>LOGIN</span></a>
      </li>

      <li class="nav" id="Registro">
        <a id="navb6" class="navb" href="../Html/registro.php"><span>REGISTRO</span></a>
      </li>

      <?php }else:{ ?>
      <li class="nav" id="Logout">
        <a id="navb6" class="navb" href="../Html/logout.php"><span><?php echo strtoupper($_SESSION['user']); ?> (salir)</span></a>
      </li>
      <?php }endif; ?>

      
    </ul>
  </nav>
</div>