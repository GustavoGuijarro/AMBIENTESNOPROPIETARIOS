<?php
include('conexion.php');
$id = $_POST['id_usuario'];
$proceso = $_POST['pro'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$provincia = $_POST['provincia'];
$canton = $_POST['canton'];
$parroquia = $_POST['parroquia'];
$usuario = $_POST['usuario'];
$contrasenia = $_POST['contrasenia'];
$verificarcontrasenia = $_POST['verificarcontrasenia'];

//VERIFICAMOS EL PROCESO

switch($proceso){
	case 'Registro':
		mysql_query("INSERT INTO usuarios (nombre, email, telefono, direccion, provincia, canton, parroquia, usuario, contrasenia, verificarcontrasenia)VALUES('$nombre', '$email', '$telefono', '$direccion','$provincia','$canton','$parroquia','$usuario','$contrasenia','$verificarcontrasenia')");
	break;
	
	case 'Edicion':
		mysql_query("UPDATE usuarios SET nombre = '$nombre', email = '$email', telefono = '$telefono', direccion = '$direccion', provincia = '$provincia', canton = '$canton', parroquia = '$parroquia', usuario = '$usuario', contrasenia = '$contrasenia', verificarcontrasenia = '$verificarcontrasenia' WHERE id_usuario = '$id'");
	break;
}


//ACTUALIZAMOS LOS REGISTROS Y LOS OBTENEMOS

$registro = mysql_query("SELECT * FROM usuarios ORDER BY id_usuario ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="150">Nombre</th>
               	<th width="150">Email</th>
               	<th width="150">Telefono</th>
               	<th width="150">Direccion</th>
               	<th width="150">Provincia</th>
               	<th width="150">Canton</th>
                <th width="150">Parroquia</th>
                <th width="150">Usuario</th>
				<th width="50">Opciones</th>
            </tr>';
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
                                <td>'.$registro2['nombre'].'</td>
								<td>'.$registro2['email'].'</td>
								<td>'.$registro2['telefono'].'</td>
								<td>'.$registro2['direccion'].'</td>
                                <td>'.$registro2['provincia'].'</td>
                                <td>'.$registro2['canton'].'</td>
                                <td>'.$registro2['parroquia'].'</td>
                                <td>'.$registro2['usuario'].'</td>
				<td><a href="javascript:editarProducto('.$registro2['id_usuario'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarProducto('.$registro2['id_usuario'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
echo '</table>';
?>