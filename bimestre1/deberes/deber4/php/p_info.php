<?php

function mostrar_datos(){
	  $nombre = $_POST['name'];
      $apellido = $_POST['apellido'];
      $genero = $_POST['genero'];
      $correo = $_POST['email'];
      $fecha = $_POST['date'];
     
 
      echo "</br>";
      echo "</br>";
      echo "USTED A INGRESADO LA INFORMACION CON EXITO";
      echo "</br>";
      echo "POR FAVOR REVISE SU INFORMACION";
      echo "</br>";
      echo "</br>";
      echo "NOMBRE      :     ".$nombre;
      echo "</br>";
      echo "</br>";
      echo "APELLIDO    :    ".$apellido;
      echo "</br>";
      echo "</br>";
      echo "SEXO    :    ".$genero;
      echo "</br>";
      echo "</br>";
      echo "CORREO ELECTRONICO   :    ".$correo;
      echo "</br>";
      echo "</br>";
      echo  "FECHA DE NACIMIENTO     :   ".$fecha;
      echo "</br>";
      echo "</br>";
            echo "</br>";
      echo "</br>";
      echo "</br>";
  }

?>