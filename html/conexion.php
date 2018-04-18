<?php

$mysqli = new mysqli("localhost","root","","catanos");

if (mysqli_connect_errno()){

	echo "Conexión fallida: ". mysqli_connect_error();
	exit();
}

?>