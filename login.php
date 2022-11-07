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
      <div class="error"> <?php 
        if(isset($_SESSION['errorLogin']) && !empty($_SESSION['errorLogin'])){
          echo $_SESSION['errorLogin'];
          $_SESSION['errorLogin'] = "";
        }
        ?>
      </div>
      <div class="formulario">
          <h1>Inicio de Sesión</h1>
          <form action="plogin.php" method="post" id="form">
            <div class="caja">
              <input type="text" name="usuario" />
              <label for="usuario">Nombre de usuario</label>
            </div>
            <div class="caja">
              <input type="password" name="pass" />
              <label for="pass">Contraseña</label>
            </div>
            <input type="submit" value="Iniciar" class="boton"/>
          </form>
        </div>
      </main>
    </div>
    <?php require_once('footer.php');?>
  </body>
</html>
