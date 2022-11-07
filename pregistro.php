<?php
session_start();
require_once('validar.php');

if(isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['repass'])){
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contrasena = $_POST['pass'];
    $confirmar_contrasena = $_POST['repass'];
}else{
    echo "Fallo al capturar los datos";
}
$requeridos = ['usuario', 'email', 'pass', 'repass'];
$mErrores =[];
$errores = false;

foreach($requeridos as $requerido){
    if(validar_requerido($_REQUEST[$requerido] ?? '')){
        $mErrores[$requerido]= true;
        $errores = true;
    }
}
$contrasenaEncriptada = password_hash($_REQUEST['pass'], PASSWORD_BCRYPT);
if($contrasena == $confirmar_contrasena){
    if (!$errores){
        $caducidad = time() + 3600;
        setcookie("usuario", $usuario, $caducidad);
        setcookie("contraseña", $contrasenaEncriptada, $caducidad);
        $cookiesOk = true;
        header("Location: login.php");
    }
   
}else{
    $mErrores['passDirefentes']= true;
    $errores = true;
}
if($errores){
    $mErrores['existeError'] = true;
    $_SESSION['registroErrores'] = $mErrores;
    header("Location: registro.php");
}

/* if(!$cookiesOk){
    header("Location: registro.php");
} */


?>