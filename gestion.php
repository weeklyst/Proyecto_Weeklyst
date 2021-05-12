<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gestionar listas</title>
    <link rel="icon" href="img/icono.png">
    <link rel="stylesheet" href="css/gestion.css">
    <script src="https://kit.fontawesome.com/eac556b4db.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header class="cabecera">
      <nav class="navigation">
        <div class="menucont">
          <ul class="menu">
            <i class="fas fa-caret-down icon1"><a href"#">Menú</a><ul class="submenu">
              <li><a href="institucion.php">Inicio</a></li>
              <li><a href="gestion.php">Gestionar listas</a></li>
              <li><a href="#">Sobre nosotros</a></li>
              <li><a href="#">Contáctenos</a></li>
              <li><a href="login.php">Cerrar Sesión</a></li>
            </ul></i>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container">
      <div class="cont">
        <div class="opciones">
          <center><form class="" action="gestion.php" method="post">
            <input type="submit" name="crear_programa" value="Crear programa">
            <input type="submit" name="ver_programa" value="Ver programa">
            <input type="submit" name="ver_fallas" value="Ver fallas">
            <input type="submit" name="ver_excusas" value="Ver excusas">
          </form></center>
        </div>
      </div>
    </div>

    <?php
      require 'proceso_gestion.php';

      $institucion = new institucion();

      echo $institucion->crear_programa();

    ?>

  </body>
</html>
