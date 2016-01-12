<?php

$mysql = new Mysqli($host, $usuario,$contrasenia,$bdd);

//require('config.php');


if($mysqli->connect_error)
	die ($mysqli->connect_error);
mysqli){
	$nom = $_POST['nombre'];
	$usu = $_POST['usuario'];
	$email = $_POST['email'];
	$contr = $_POST['contrasenia'];
	$verif = $_POST['verificar'];
	$direc = $_POST['direccion'];
	$telef = $_POST['telefono'];

	if($nom != ''&&$usu !=''&&$email !=''&&$contr !=''&&$verif!=''&&$contr !=''&&$verif!=''&&$telef!=''){
		$q_insert = "INSERT INTO registrar(nombre, usuario, email,
			contrasena, verificar, direccion, telefono)
			VALUES ('$nom', '$usu', '$email', '$contr', '$verif', 
			'$direc', '$telef')";
			$resp = $mysqli->query($q_insert);

			if(!$resp){
				echo '<div>Hay un error al insertar'.$mysqli->error.'</div>';
			}
			else{
				echo '<div>Dato ingresado correctamente</div>';
				header('Location: index.php');
			}
		}
		else{
				echo '<div>Ingrese Datos por Favor</div>';
			}
		}
?>