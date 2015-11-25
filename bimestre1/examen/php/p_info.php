<?php

function mostrar_datos(){
	  $nombre = $_POST['name'];
      $apellido = $_POST['apellido'];
      $genero = $_POST['Genero'];
      $correo = $_POST['email'];
      $fecha = $_POST['date'];
      $ciudad = $_POST['city'];
      
      $bibliografia = $_POST['bibli'];
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
      echo "SUS INTERESE SON: ";
      echo "</br>";
      if(!empty($_POST['interes'])){
      // Loop to store and display values of individual checked checkbox.
        foreach($_POST['interes'] as $selected){
        echo $selected."</br>";
        }
      }
      echo "</br>";
      echo "</br>";

      echo "CIUDAD DE NACIMIENTO    :    ".$ciudad;
      echo "</br>";
      echo "</br>";
      echo "BIBLIOGRAFIA   :   ".$bibliografia;
      echo "</br>";
      echo "</br>";
  }

?>