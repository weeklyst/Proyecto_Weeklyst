<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../css/style_login.css">
    <link rel="icon" href="../img/icono.png">
    <script src="https://kit.fontawesome.com/eac556b4db.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header class="cabecera">
      <nav class="navigation">
        <div class="menucont">
          <ul class="menu">
            <i class="fas fa-caret-down icon1"><a href"#">Menú</a><ul class="submenu">
              <li><a href="../index.php">Inicio</a></li>
              <li><a href="#">Sobre nosotros</a></li>
              <li><a href="#">Servicios</a></li>
              <li><a href="#">Contáctenos</a></li>
              <li><a href="login.php">Iniciar Sesión</a></li>
              <li><a href="registro.php">Registrarse</a></li>
            </ul></i>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container">
      <div class="form-reg">
        <h2>Iniciar sesión</h2>
        <form class="registro" action="procesos_formularios/proceso_login.php" method="post">
          <label>Número de documento</label><br>
          <input type="text" name="num_docu" placeholder="Ingrese número de identificación"><br>
          <label for="pass">Ingresar contraseña</label><br>
          <input type="password" name="pass" placeholder="Ingrese su contraseña"><br>
          <a href="login.php" class="pass">Olvidé mi contraseña</a>
          <div class="option">
          <div class="btn1">
              <a href="registro.php" class="otro">No tengo una cuenta</a>
          </div>
            <input class="boton" type="submit" name="btn" value="Ingresar"><br>
          </div>
        </form>
        <a href="index.php"><img src="../img/logoweeklyst.png" class="logo"></a>
      </div>
    </div>

  </body>
</html>
