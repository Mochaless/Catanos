<?php 

	require('conexion.php');

	session_start();

	if(isset($_SESSION["user"])){
		header("Location:index.php");
	}

	if(!empty($_POST)){
		$usuario = mysqli_real_escape_string($mysqli,$_POST['user']);
		$password = mysqli_real_escape_string($mysqli,$_POST['pass']);

		$query = "SELECT nombre FROM empresas WHERE CIF='$usuario' AND pass='$password'";
		
		$result = $mysqli->query($query);
		$rows = $result->num_rows;

		if($rows > 0){
			$_SESSION['user']=$usuario;
			$_SESSION['empresa']=true;
			$_SESSION['admin']=false;
			$_SESSION['login']=true;
			header('Location: index.php');
		}
		else{
			session_destroy(); 
			include("loginEmpresa.php");
			echo "<br><p>El nombre de usuario o contraseña no son correctos</p><br>";
		}
	}
	$mysqli->close();
?>