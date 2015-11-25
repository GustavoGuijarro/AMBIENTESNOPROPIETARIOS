<?php

$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);

if($_POST){
	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$genero = $_POST['genero'];
	$edad = $_POST['edad'];
	

	if($nom != ''&&$ape !=''&&$genero !=''&&$edad !=''){
		$q_insert = "INSERT INTO empleado(nombre, apellido, genero,
			edad)
			VALUES ('$nom', '$ape', '$gene', '$edad')";
			$resp = $conn->query($q_insert);

			if(!$resp){
				echo '<div>Hay un error al insertar'.$conn->error.'</div>';
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