<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos.css" />
    <title>Tus Repuestos Online</title>
  </head>
  <body>
    <header>
      <h1>Tus Repuestos Online</h1>
    </header>
    <?php require_once('nav.php');?>
    <div class="row">
    <?php require_once('aside.php');?>
      <main>
        <div class="error">
          <?php 
          $requeridos = ['usuario', 'email', 'pass', 'repass', 'passDirefentes'];
          if(isset($_SESSION['registroErrores']['existeError']) && $_SESSION['registroErrores']['existeError']){
            foreach($requeridos as $requerido){
              if(isset($_SESSION['registroErrores'][$requerido]) && $_SESSION['registroErrores'][$requerido]){
                echo 'Falta el campo:'.$requerido;
                echo '</br>';
              }
            }
            $_SESSION['registroErrores']= "";
          }
           ?>
        </div>
        <div class="formulario">
          <h1>Formulario de Registro</h1>
          <form action="pregistro.php" method="post" id="form">
            <div class="caja">
              <input type="text" name="usuario" autofocus />
              <label for="usuario">Nombre de usuario</label>
            </div>
            <div class="caja">
              <input type="email" name="email" />
              <label for="email">E-mail</label>
            </div>
            <div class="caja">
              <input type="password" name="pass" />
              <label for="pass">Contraseña</label>
            </div>
            <div class="caja">
              <input type="password" name="repass" />
              <label for="repass">Repetir Contraseña</label>
            </div>
            <input type="submit" value="Registrar" class="boton" />
          </form>
        </div>
      </main>
    </div>
    <?php require_once('footer.php');?>
  </body>
</html>
