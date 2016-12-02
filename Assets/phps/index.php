<?php
/**
pagina de inicio session
*/
session_start();
if (!isset($_SESSION['usuarios']) AND $_SESSION['contraseña'] != 1) {
      header("location: #");
  exit;
      }
?>
