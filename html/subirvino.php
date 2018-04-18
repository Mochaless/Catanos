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
	<link rel="Stylesheet" Type="text/css" href="../css/empresa.css"/>
</head>
<body>

	<div id ="contenedor">
	<?php include('navbar.php'); ?>
	<div class="logoemp"> 
		<img id= "logoemp" src="../img/mantenimiento.PNG" alt="Logo"/> 
	</div><br>	
	
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

		<div id="super">
			<div id="formvino">
				<form action= "" method="POST">
					<input type="text" name="nombre" placeholder="nombre"><br><br>
					<input type="text" name="fecha" placeholder="fecha"><br><br>
					<select id="uva" name="uva">
					  <option value="" selected="selected">- Tipo de uva -</option>
					  <option value="Cencibel">Cencibel</option>
					  <option value="Sirah">Sirah</option>
					  <option value="Garnacha">Garnacha</option>
					  <option value="Macabeo">Macabeo</option>
					  <option value="Airen">Airen</option>
					  <option value="Verdejo">Verdejo</option>
					  <option value="Souvignon Blanc">Souvignon Blanc</option>
					  <option value="Albaríño">Albariño</option>
					  <option value="Mezcla">Mezcla</option>
					</select><br><br>
					<select id="tipov" name="tipov">
					  <option value="" selected="selected">- Tipo de vino -</option>
					  <option value="Tinto">Tinto</option>
					  <option value="Blanco">Blanco</option>
					  <option value="Rosado">Rosado</option>
					  <option value="Espumoso">Espumoso</option>
					</select><br><br>
					<textarea name="info" placeholder="info"rows="10" cols="40"></textarea><br><br>
					<left><input type="submit" name="subir" value="subir vino"></left>
				</form>
			</div>
		</div>	
<?php 
	insertvino();
?>

</body>
</html>