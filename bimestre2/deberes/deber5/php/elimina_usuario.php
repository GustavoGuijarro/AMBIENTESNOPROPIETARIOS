<?php
include('conexion.php');

$id = $_POST['id'];

//ELIMINAMOS EL PRODUCTO

mysql_query("DELETE FROM usuarios WHERE id_usuario = '$id'");

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