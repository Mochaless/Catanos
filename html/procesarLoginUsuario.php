<?php 

	require('conexion.php');

	session_start();

	if(isset($_SESSION["user"])){
		header("Location:index.php");
		$mysqli->close();
	}

	if(!empty($_POST)){
		$usuario = mysqli_real_escape_string($mysqli,$_POST['user']);
		$password = mysqli_real_escape_string($mysqli,$_POST['pass']);

		$query = "SELECT nombre, pass, admin FROM usuarios WHERE mail='$usuario' AND pass='$password'";
		
		$result = $mysqli->query($query);
		$rows = $result->num_rows;

		if($rows > 0){
			echo "si";

			$fila = mysqli_fetch_assoc($result);

			/*SESSION['user']=$usuario;
			$_SESSION['empresa']=false;
			$_SESSION['admin']=false;
			$_SESSION['login']=true;
			header('Location: index.php');
			*/
			$_SESSION['user']=$fila["nombre"];
			$_SESSION['admin']=$fila["admin"];
			$_SESSION['empresa']=false;
			$_SESSION['login']=true;
			header('Location: index.php');
			
		}
		else{
			session_destroy(); 
			include("loginUsuario.php");
			echo "<br>El nombre de usuario o contraseña no son correctos<br>";
		}
	}
	$mysqli->close();
?>