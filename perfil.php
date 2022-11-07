
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
    <?php 
      require_once('nav.php');
      if((isset($_SESSION['user']) && !$_SESSION['user']) || !isset($_SESSION['user'])){
        header('Location:login.php');
      }
    ?>
    <div class="row">
    <?php require_once('aside.php');?>
      <main>
        <h2 class="login"><?php echo $_COOKIE['usuario'].", estas registrado" ?></h2>
        <form action="destruir.php">
          <input type="submit" value="Salir Sesion" class="botonCerrar">
        </form>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam vitae pariatur officiis vero ab sed sapiente aliquid,
          sequi omnis quaerat quis! Quia voluptas aut quidem voluptatem tempore sint tenetur voluptatibus?
        </p>
      </main>
    </div>
    <?php require_once('footer.php');?>
  </body>
</html>
