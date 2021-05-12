<?php
  require '../../bd/conexion.php';

    if(($_POST['rol'])==1){
      header('location:../../Interfaces/institucion.php');
    }
    else if(($_POST['rol'])==2){
      header('location:../../Interfaces/instructor.php');
    }
    else if(($_POST['rol'])==3){
      header('location:../../Interfaces/aprendiz.php');
    }

    mysqli_select_db($conexion,'weeklyst') or die(mysqli_error());

    if(@$_POST['btn']){
      $query=mysqli_query($conexion,"INSERT INTO registro(nombre,apellidos,tipo_docu,num_docu,correo,rol,pass,pass_confirm) VALUES('$_POST[nombre]','$_POST[apellidos]','$_POST[tipo_docu]','$_POST[num_docu]','$_POST[correo]','$_POST[rol]','$_POST[pass]','$_POST[pass_confirm]')");
    }

?>
