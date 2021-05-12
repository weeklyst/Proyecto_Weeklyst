<?php
  if(isset($_POST['guardar'])){
    $nombre=($_POST['nom_programa']);
    $ficha=($_POST['num_ficha']);

    include("../../bd/conexion.php");
    $sql="insert into programa(nom_programa) values('".$nombre."')";
    $sql1="insert into ficha(num_ficha) values('".$ficha."')";

    $resultado=mysqli_query($conexion,$sql);
    $resultado1=mysqli_query($conexion,$sql1);

    if($resultado && $resultado1){
      echo "<script languaje='javascript'>
            alert('Los datos fueron ingresados correctamente');
            location.assign('../../Interfaces/institucion.php');</script>";
    }else {
      echo "string";"<script languaje='javascript'>
            alert('Los datos NO fueron ingresados correctamente');
            location.assign('../../Interfaces/institucion.php');</script>";
    }
    mysqli_close($conexion);
  }else{

  }
?>
