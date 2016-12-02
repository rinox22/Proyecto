<?php
    require('pop.php');
    
    session_start();
    
    if(isset($_SESSION["user"])){
        header("Location: inicio.html");
    }
    
    if(!empty($_POST))
    {
        $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
        $password = mysqli_real_escape_string($mysqli,$_POST['contraseña']);
        $error = '';
        
        $sha1_pass = sha1($password);
        
        $sql = "SELECT id, usuario FROM usuarios WHERE usuario = '$usuario' AND password = '$sha1_pass'";
        $result=$mysqli->query($sql);
        $rows = $result->num_rows;
        
        if($rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION['id_usuario'] = $row['id'];
            $_SESSION['tipo_usuario '] = $row['id_usuario'];
            
            header("location: inicio.html");
            } else {
            $error = "El nombre o contraseña son incorrectos";
        }
    }