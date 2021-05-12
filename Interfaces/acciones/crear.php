<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crear programas</title>
    <link rel="icon" href="../../img/icono.png">
    <link rel="stylesheet" href="../../css/crear.css">
    <script src="https://kit.fontawesome.com/eac556b4db.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/despliegue_crear.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
      include("proceso_usuario/proceso_crear.php");
    ?>
    <header class="cabecera">
      <img class="logo" src="../../img/logoweeklyst.png">
      <nav class="navigation">
        <div class="menucont">
          <ul class="menu">
            <i class="fas fa-caret-down icon1"><a href"#">Menú</a><ul class="submenu">
              <li><a href="../institucion.php"><i class="fas fa-house-user icon ic ic1"><span class="txt">Inicio</span> </i><a href="institucion.php"></a></li>
              <li><a href="#"><i class="fas fa-users icon ic"> <span class="txt">Sobre nosotros</span> </i></a></li>
              <li><a href="#"><i class="far fa-id-badge icon ic"><span class="txt contac">Contáctenos</span> </i></a></li>
              <li><a href="#"><i class="fas fa-user-cog icon ic"><span class="txt">Configuración</span> </i></a></li>
              <li><a href="../../index.php"><i class="fas fa-sign-out-alt icon ic"><span class="txt">Cerrar Sesión</span> </i></a></li>
            </ul></i>
          </ul>
        </div>
      </nav>
    </header>
    <div class="container">
      <h1>Crear un programa</h1>
      <center><form class="program" id="program" action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="">Nombre del programa</label><br>
        <input type="text" name="nom_programa" placeholder="Ingrese el nombre del programa de formación"><br>
        <label for="">Asociar ficha</label><br>
        <input type="text" name="num_ficha" placeholder="Ingrese la ficha perteneciente al programa"><br>
        <input type="submit" name="otro" value="+" id="otro">
        <input type="submit" name="guardar" value="CREAR">
        <a href="../institucion.php">Regresar</a>
      </form></center>
    </div>
  </body>
</html>
