<?php
include('conexion.php');

$id = $_POST['id'];

//OBTENEMOS LOS VALORES DEL PRODUCTO

$valores = mysql_query("SELECT * FROM usuarios WHERE id_usuario = '$id'");
$valores2 = mysql_fetch_array($valores);

$datos = array(
				0 => $valores2['nombre'], 
				1 => $valores2['email'], 
				2 => $valores2['telefono'], 
				3 => $valores2['direccion'],
				4 => $valores2['provincia'], 
				5 => $valores2['canton'], 
				6 => $valores2['parroquia'],
				7 => $valores2['usuario'], 
				8 => $valores2['contrasenia'], 
				9 => $valores2['verificarcontrasenia'],
				);
echo json_encode($datos);
?>