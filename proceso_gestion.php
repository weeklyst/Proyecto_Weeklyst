<?php
  require 'conexion.php';
  class institucion{
    function crear_programa(){
      if(@$_POST['crear_programa']){
        echo "<center><form acion='gestion.php' method='post'>";
        echo "<input class='input' type='text' name='nom_programa' placeholder='Ingrese nombre del programa'><br>";
        echo "<input class='input' type='text' name='num_ficha' placeholder='Ingrese número de ficha'>";
        echo "<center><input class='env' type='submit' name='otra' value='Agregar otra ficha'></center>";
        echo "<center><input class='env' type='submit' name='enviar_programa' value='Guardar'></center>";
        echo "</form></center>";
      }

      if(@$_POST['otra']){
        echo "<input class='input' type='text' name='num_ficha' placeholder='Ingrese número de ficha'>";
      }

      if(@$_POST['enviar_programa']){
        $query=mysqli_query($conexion,"INSERT INTO programa(nom_programa) VALUES('$_POST[nom_programa]')");
        $query=mysqli_query($conexion,"INSERT INTO ficha(num_ficha) VALUES('$_POST[num_ficha]')");
      }
    }
  }
?>
