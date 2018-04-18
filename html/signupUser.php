<?php

	//$DBconnection = mysqli_connect('127.0.0.1','root','','catanos');
	 require('conexion.php');
   session_start();

	  
    if(isset($_SESSION["user"])){
      header("Location:index.php");
      $mysqli->close();
    }

    else{

      session_destroy(); 

      if(!empty($_POST)){

        $mail = mysqli_real_escape_string($mysqli,$_POST['mail']);
        $user = mysqli_real_escape_string($mysqli,$_POST['user']);
        $pass = mysqli_real_escape_string($mysqli,$_POST['pass']);
  		$nick = mysqli_real_escape_string($mysqli,$_POST['nick']);


        //string de request
        $query = "SELECT * FROM usuarios WHERE mail='$mail'";
        $result = $mysqli->query($query);
        $rows = $result->num_rows;

         if($rows > 0){

          include("registroUser.php");
          echo "<p>El usuario ya se encuentra registrado</p>";
        }

        else{

           $query = " INSERT INTO usuarios (mail, nombre, pass, nick) VALUES ('$mail', '$user', '$pass', '$nick')";
           
           //echo $query;

           if (!$result = $mysqli->query($query)){
              echo "No se ha podido finalizar el registro";
           }
           else{
              header("Location: loginUsuario.php");
           }
        }

        $mysqli->close();
  }
}

?>