<?php
$mysqli=new mysqli("localhost","root","","intranet");
if (mysqli_connect_error()) {
	echo 'Conexion Fallida : ', mysqli_connect_error();
	exit();
}