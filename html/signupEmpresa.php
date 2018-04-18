<?php

	$DBconnection = mysqli_connect('127.0.0.1','root','','catanos');
	 require('conexion.php');
   session_start();
   if(isset($_SESSION["user"])){
      header("Location:index.php");
      $mysqli->close();
    }

    else{

      session_destroy(); 
	
	    if(!empty($_POST)) {
			$cif = htmlspecialchars(trim(strip_tags($_POST['cif'])));
			$name = htmlspecialchars(trim(strip_tags($_POST['name'])));
			$pass = htmlspecialchars(trim(strip_tags($_POST['pass'])));
			$ciudad = htmlspecialchars(trim(strip_tags($_POST['ciudad'])));
			$pais = htmlspecialchars(trim(strip_tags($_POST['pais'])));
			$info = htmlspecialchars(trim(strip_tags($_POST['info'])));
			
      //string de request
      $sqlSelect = "
                    SELECT *
                    FROM empresas
                    WHERE CIF='".$cif."';
                    ";
		$result = $mysqli->query($sqlSelect);
        $rows = $result->num_rows;

      //lanzar request a la BD
      
      if($rows > 0){

          include("registroEmpresa.php");
          echo "<p>La empresa ya se encuentra registrada</p>";
        }
		else{
        //tratamiento de la query recibida
			
			  //registro de empresa
			   $sqlInsert = "
							INSERT INTO empresas (CIF, pass, nombre, ciudad, pais, info)
							VALUES ('$cif', '$pass', '$name', '$ciudad', '$pais', '$info')";

			  if (!$result = $mysqli->query($sqlInsert)){
				  echo "No se ha podido finalizar el registro";
			   }
			   else{
				  header("Location: loginEmpresa.php");
			   }
		}
		$mysqli->close();
	}
}
	
?>