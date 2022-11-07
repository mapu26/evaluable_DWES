<?php
session_start();
if(isset($_SESSION['user']) && $_SESSION['user']){
    echo '
    <nav>
      <a href="./principal.php">Home</a>
      <a href="./perfil.php">Perfil</a>
    </nav>';
}else{
    echo '
    <nav>
      <a href="./principal.php">Home</a>
      <a href="./registro.php">Registro</a>
      <a href="./login.php">Login</a>
    </nav>';
}
?>