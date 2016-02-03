
<?php 
session_start();
  if (isset($_SESSION['ingreso']) && $_SESSION['ingreso']=='YES') 
  {?>
    <!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INGRESO DE MATERIAS</title>
    <link href="../css/estilo.css" rel="stylesheet">
    <script src="../js/jquery.js"></script>
    <script src="../js/myjava.js"></script>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../Resources/css/bootstrap.min.css">

</head>
 
<body>
<nav class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Cambiar Navegacion</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">MATRICULACION</a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="javascript: void(0)" class="dropdown-toggle" data-toggle="dropdown">BIENVENIDO .....<?php echo $_SESSION['nombre']; ?></a>
                     <ul class="dropdown-menu">
                        <li><a href="javascript: void(0)" onclick='cerrar();'>Cerrar Session</a></li>
                     
                    </ul>
                </li>
                
            </ul>
        </div>
    </nav>

   <section>
    <table border="0" align="center">
        <tr>
            <td width="100"><button id="nuevo-producto" class="btn btn-primary">Nuevo Registro</button></td>

         
        </tr>
    </table>
    </section>
    <div class="registros" id="agrega-registros">
        <table class="table table-striped table-condensed table-hover">
            <tr>
                <th width="150">Id Usuario</th>
                <th width="150">Nombre</th>
                <th width="150">Apellido</th>
                <th width="150">Email</th>
            </tr>
            <?php 
                    include('../Models/conexion1.php');
                    $registro = mysql_query("SELECT * FROM estudiante ORDER BY id_estudiante ASC");
                    while($registro2 = mysql_fetch_array($registro)){
                        echo '<tr>
                                <td>'.$registro2['id_estudiante'].'</td>
                                <td>'.$registro2['nombres'].'</td>
                                <td>'.$registro2['apellidos'].'</td>
                                <td>'.$registro2['email'].'</td>
                                <td><a href="javascript:editarProducto('.$registro2['id_estudiante'].');" class="glyphicon glyphicon-edit"></a> 
                                <a href="javascript:eliminarProducto('.$registro2['id_estudiante'].');" class="glyphicon glyphicon-remove-circle"></a></td>
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
              <h4 class="modal-title" id="myModalLabel"><b>Registrar Materia</b></h4>
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
                        <td>Materia: </td>
                        <td><input type="text" required="required" name="nombre" id="nombre" maxlength="100" placeholder="Escriba nombre" /></td>
                    </tr>
                    <<tr>
                        <td>Selecciones el nivel: </td>
                        <td><select required="required" name="tipo" id="tipo">
                                <option value="Primero">Primero</option>
                                <option value="Segundo">Segundo</option>
                                <option value="Tercero">Tercero</option>
                                <option value="Cuarto">Cuarto</option>
                                <option value="Quinto">Quinto</option>
                                <option value="Sexto">Sexto</option>
                                                           
                            </select></td>
                    </tr>
                    <tr>
                        <td>Profesor: </td>
                        <td><input type="number" required="required" name="telefono" id="telefono" maxlength="100" placeholder="Escriba telefono"/></td>
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
      
    <script src="../Resources/js/jquery-1.11.2.js"></script>
    <script src="../Resources/js/bootstrap.min.js"></script>
    <script>
        function cerrar()
        {
            $.ajax({
                url:'../Controllers/usuario.php',
                type:'POST',
                data:"mensaje=mensaje&boton=cerrar"
            }).done(function(resp){
                alert(resp);
            });
        }
    </script>

</body>
</html>

<?php

  }
  else
  {
    header("location: ./");
  }
 ?>
    



   