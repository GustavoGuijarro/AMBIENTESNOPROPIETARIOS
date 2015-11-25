<?php
$error = '';

if($_POST){
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $genero = $_POST['genero'];
  $edad = $_POST['edad'];
  $contrasena = "";
  $verificar_contrasena = "";

  if($contrasena !== $verificar_contrasena){
    $error .= htmlentities('Las contraseñas no coinciden');
  }

  if($error == ''){
    $conn = new mysqli('localhost' , 'root' , '', 'examen');
    if ($conn->connect_error) $error .= '<br>No se pudo conectar a la base de datos';//die($conn ->connect_error);

    $query = "INSERT INTO usuario 
                    (nombre, 
                      apellidos, 
                      genero, 
                     edad)
                  VALUES (
                    '$nombre',
                    '$apellidos',
                    '$genero',
                    '$edad'
                     )";

    $result = $conn ->query($query);
    if (!$result) {
      $error .= '<br>No se pudo guardar los registros en la bdd. Vuelva a intentarlo.';//die($conn ->error);
    }
    
    if($error == '') {
      http_redirect('index.php?exito=' . urlencode('Datos guardados con exito'));
    }
  }
}


