<?php

  require '../../bd/conexion.php';

  $user=$_POST['num_docu'];
  $pass=$_POST['pass'];
  session_start();
  $_SESSION['registro']=$user;

  $consulta="SELECT*FROM registro where num_docu='$user' and pass='$pass'";
  $resultado=mysqli_query($conexion,$consulta);

  $filas=mysqli_fetch_array($resultado);

  if($filas['rol']==1){ //institución
      header('location:../../Interfaces/institucion.php');

    }else if($filas['rol']==2){//instructor
      header('location:../../Interfaces/instructor.php');
    }else if($filas['rol']==3){//aprendiz
      header('location:../../Interfaces/aprendiz.php');
    }else{
      ?>
      <?php
      include("index.php");
      ?>
      <h1 class="bad">ERROR DE AUTENTICACION</h1>
      <?php
    }

?>
