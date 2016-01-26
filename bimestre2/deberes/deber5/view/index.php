<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro Usuarios</title>
<link href="../css/estilo.css" rel="stylesheet">
<script src="../js/jquery.js"></script>
<script src="../js/myjava.js"></script>
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
</head>
<body>
    <header>USUARIOS</header>
    <section>
    <table border="0" align="center">
    	<tr>
        	<td width="400"><input type="text" placeholder="Busca un usuario por *****" id="bs-prod"/></td>
            <td width="100"><button id="nuevo-producto" class="btn btn-primary">Nuevo</button></td>

         
        </tr>
    </table>
    </section>
    <div class="registros" id="agrega-registros">
    	<table class="table table-striped table-condensed table-hover">
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
            </tr>
            <?php 
					include('../php/conexion.php');
					$registro = mysql_query("SELECT * FROM usuarios ORDER BY id_usuario ASC");
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
			?>
        </table>
    </div>
    
    
    <!-- MODAL PARA EL REGISTRO DE PRODUCTOS-->
    <div class="modal fade" id="registra-producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel"><b>Registra o Edita un Producto</b></h4>
            </div>
            <form id="formulario" class="formulario" onsubmit="return modificaRegistro();">
            <div class="modal-body">
				<table border="0" width="100%">
               		 <tr>
                        <td colspan="2"><input type="text" required="required" readonly="readonly" id="id_usuario" name="id_usuario" readonly="readonly" style="visibility:hidden; height:5px;"/></td>
                    </tr>
                     <tr>
                    	<td width="150">Proceso: </td>
                        <td><input type="text" required="required" readonly="readonly" id="pro" name="pro" /></td>
                    </tr>
                	<tr>
                    	<td>Nombre: </td>
                        <td><input type="text" required="required" name="nombre" id="nombre" maxlength="100" placeholder="Escriba nombre" /></td>
                    </tr>
                    <tr>
                        <td>Email: </td>
                        <td><input type="text" required="required" name="email" id="email" maxlength="100" placeholder="ejemplo@hotmail.com"/></td>
                    </tr>
                    <tr>
                        <td>Telefono: </td>
                        <td><input type="number" required="required" name="telefono" id="telefono" maxlength="100" placeholder="Escriba telefono"/></td>
                    </tr>
                    <tr>
                        <td>Direccion: </td>
                        <td><input type="text" required="required" name="direccion" id="direccion" maxlength="100"/></td>
                    </tr>
                    <tr>
                        <td>Provincia: </td>
                        <td><select required="required" name="tipo" id="tipo">
                                <option value="Quito">Pichincha</option>
                                <option value="Guayas">Guayas</option>
                                <option value="Cuenca">Cuenca</option>
                                <option value="otros">Otros</option>
                            </select></td>
                    </tr>
                                        <tr>
                        <td>Canton: </td>
                        <td><select required="required" name="canton" id="canton">
                                <option value="Quito">Quito</option>
                                <option value="Guayaquil">Guayaquil</option>
                                <option value="Chordelec">Chordelec</option>
                                <option value="otros">Otros</option>
                            </select></td>
                    </tr>
                                        <tr>
                        <td>Parroquia: </td>
                        <td><select required="required" name="parroquia" id="parroquia">
                                <option value="San Sebastian">San Sebastian</option>
                                <option value="Santa Ana">Santa Ana</option>
                                <option value="San Fernando">San Fernando</option>
                                <option value="otros">Otros</option>
                            </select></td>
                    </tr>                    
                    <tr>
                        <td>Usuario: </td>
                        <td><input type="text" required="required" name="usuario" id="usuario" maxlength="100"/></td>
                    </tr>
                    <tr>
                        <td>Contraseña: </td>
                        <td><input type="text" required="required" name="contrasenia" id="contrasenia" maxlength="100"/></td>
                    </tr>
                    
                    <tr>
                    	<td>Verificar Contraseñia : </td>
                        <td><input type="text" required="required" name="verificarcontrasenia" id="verificarcontrasenia"/></td>
                    </tr>

                    <tr>
                    	<td colspan="2">
                        	<div id="mensaje"></div>
                        </td>
                    </tr>
                </table>
            </div>
            
            <div class="modal-footer">
            	<input type="submit" value="Registrar" class="btn btn-success" id="reg"/>
                <input type="submit" value="Editar" class="btn btn-warning"  id="edi"/>
            </div>
            </form>
          </div>
        </div>
      </div>
      

</body>
</html>
