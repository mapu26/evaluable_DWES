<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['pass'])){
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['pass'];
}

if($usuario == $_COOKIE['usuario'] && password_verify($contrasena, $_COOKIE['contraseña'])){
    
    $_SESSION['user'] = true;
    header("location:perfil.php");
}else{
    $_SESSION['errorLogin'] = "Errror al Logearse";
    header("location:login.php");
}
?>