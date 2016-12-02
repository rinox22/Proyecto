<?php
/**
*cierre de session
*/
session_start();
//desconexion del session
session_destroy();
//redireccionamos	
header("location: ../../login.html");
?>