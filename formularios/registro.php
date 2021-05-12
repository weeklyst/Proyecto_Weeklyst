<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/registro.css">
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
        <h2>Registro</h2>
        <form class="registro" action="procesos_formularios/proceso_registro.php" method="post">
          <label>Nombre</label><br>
          <input type="text" name="nombre" placeholder="Ingrese su nombre"><br>
          <label>Apellidos</label><br>
          <input type="text" name="apellidos" placeholder="Ingrese sus Apellidos"><br>
          <label>Tipo de documento</label><br>
          <select name="tipo_docu">
            <option value="">--Seleccionar--</option>
            <option value="Tarjeta de identidad">Tarjeta de identidad</option>
            <option value="Cedula de ciudadania">Cédula de ciudadanía</option>
            <option value="Cedula extranjera">Cédula extranjera</option>
          </select><br>
          <label>Número de documento</label><br>
          <input type="text" name="num_docu" placeholder="Ingrese número de identificación"><br>
          <label>Correo electrónico</label><br>
          <input type="email" name="correo" placeholder="Ingrese su e-mail"><br>
          <label>Rol</label><br>
          <select name="rol">
            <option value="">--Seleccionar--</option>
            <option value="1">Institucion</option>
            <option value="2">Instructor</option>
            <option value="3">Aprendiz</option>
          </select><br>
          <label for="pass">Crear contraseña</label><br>
          <input type="password" name="pass" placeholder="Crear una contraseña"><br>
          <label for="pass1">Confirmar contraseña</label><br>
          <input type="password" name="pass_confirm" placeholder="Confirmar contraseña"><br>
          <div class="terminos">
            <input type="checkbox" name="t-c">
            <span class="acuerdo">Acepto los <a href="#" class="ter">Términos y Condiciones</a>.</span><br>
          </div>
          <div class="option">
          <div class="btn1">
              <a href="login.php" class="otro">Ya tengo una cuenta</a>
          </div>
            <input class="boton" type="submit" name="btn" value="Registrarse"><br>
          </div>
        </form>
        <a href="index.php"><img src="../img/logoweeklyst.png" class="logo"></a>
      </div>
    </div>

  </body>
</html>
