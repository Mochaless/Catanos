<?php 
	

	function infoemp(){

		include "conexion.php";
		$resultado = mysqli_query($mysqli,"SELECT nombre, ciudad, pais, info FROM empresas WHERE CIF ='".$_SESSION['user']."'");
			if (!$resultado) {
	    		echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
	    	exit;
		}
		$fila = mysqli_fetch_assoc($resultado);
		return $fila;
	}

	function misvinos(){

		include "conexion.php";
			$resultado = mysqli_query($mysqli,"SELECT * FROM vinos WHERE empresa ='".$_SESSION['user']."'");

				if (!$resultado) {
		    		echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
		    	exit;
			}
			$contdiv = 0;
			while($vinos = mysqli_fetch_assoc($resultado)){
				echo "<div id ='vinos'.'$contdiv'>".$vinos['referencia']."<br><br>".$vinos['nombre']."<br><br>".$vinos['year']."<br><br>".$vinos['info']."<br><br>".$vinos['uva']."<br><br>".$vinos['tipo']."<br></div>";
				$contdiv ++;
			}
	}

	function countvinos(){

		include "conexion.php";
			$resultado = mysqli_query($mysqli,"SELECT count(referencia) FROM vinos WHERE empresa ='".$_SESSION['user']."'");
			
				if (!$resultado) {
		    		echo 'No se pudo ejecutar la consulta: ' . mysqli_error();
		    	exit;
			}
			return mysqli_fetch_assoc($resultado);
			
	}

	function insertvino(){
		include"conexion.php";

	if(isset($_POST['subir'])){

		$usuario = $_SESSION['user'];
		$nombre = $_POST["nombre"];
		$fecha = $_POST["fecha"];
		$uva = $_POST["uva"];
		$tipov = $_POST["tipov"];
		$info = $_POST["info"];

		if($usuario == '' or $nombre == '' or $info == ''){
			echo "Lo sentimos, debe rellenar todos los campos";
		}
		else{
			$insertar = mysqli_query($mysqli, "INSERT INTO vinos(referencia,nombre,empresa,year,info,foto,uva,tipo) VALUES ('','$nombre','$usuario', '$fecha', '$info', '','$uva','$tipov')" ) or die(mysqli_error($mysqli));
			echo "El vino se ha subido correctamente";
			header('location: perfilempresa.php');
			echo "El vino se ha subido correctamente";
			header('location: perfilempresa.php');
		    }
	    }
			
	}

?>
	