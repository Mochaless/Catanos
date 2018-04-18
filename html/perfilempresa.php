<?php 	
	session_start();
	include "conexion.php";
	include "funcempresa.php";
	if(isset($_SESSION['user'])) {
		echo '<b>'.'Bienvenido, '.$_SESSION['user'].'</b><br>';
	}else{
		echo '<script> alert("Debes logearte para acceder a tu perfil.");</script>';
		echo '<script> window.location="index.php";</script>';
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset = "utf-8">
	<link rel="stylesheet" type="text/css" href="../css/basic.css"/>
	<link rel="stylesheet" type="text/css" href="../css/index.css"/>
	<link rel="stylesheet" type="text/css" href="../css/navbar.css"/>
	<link rel="stylesheet" type="text/css" href="../css/empresa.css"/>		
</head>
<body>

	<div id ="contenedor">
	<?php include('navbar.php'); ?><br>
	<div> 
		<img id = "logoemp" src="../img/mantenimiento.PNG" alt="Logo"/> 
	</div><br><br>	
	
	<?php

		$fila = infoemp();
	?>

	<table id = "infoempresa" style="width:50%">	
	   <tr>
	   		<td>Empresa: </td>
	   		<td width='150'><?php echo $fila['nombre'] ?></td> 
	   </tr>
	   <tr>
	   		<td>Ciudad: </td>
	   		<td width='150'><?php echo $fila['ciudad'] ?></td>  
	   </tr>
	   <tr>
	    	<td>País: </td> 
	    	<td width='150'><?php echo $fila['pais'] ?></td> 
	   </tr>
	   <tr> 
	    	<td>información: </td>
	    	<td width='150'><?php echo $fila['info'] ?></td>
	   </tr>
    </table><br>
	
	<div id = "todoslosvinos">
	<div id = "vinosemp" style="border: 1px, solid, red">
		
		<?php
			misvinos();
		?>
	</div><br>
	</div><br><br>
	
	<a id = "subir" title="subir" href=subirvino.php><img id = "upload" src="../img/upload.jpg" /></a><br>


</body>
</html>