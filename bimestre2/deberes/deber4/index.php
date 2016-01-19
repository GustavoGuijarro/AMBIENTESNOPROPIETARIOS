<?php

$conn = new mysqli('localhost' , 'root' , '', 'registro');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM provincias";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$provincias = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $provincias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}


// print_r($provincias);

$query = "SELECT * FROM usuario";
$result = $conn ->query($query);

$usuarios;

$result ->close();
$conn ->close();
?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Registro</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

  </head>
  <body>
  	<div>
  		<div class="row">
  			<div class="col-md-12">		
  				<div class="masthead">
	  				<nav>
	  					<ul class="nav nav-justified">
	  						<li class="active"><a href="#">Inicio</a></li>
	          			</ul>
	       			 </nav>
      			</div>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-md-12">
  				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  					<ol class="carousel-indicators">
  						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
  						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2" ></li>
              <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  					</ol>

  				<div class="carousel-inner imagen" role="listbox">
  				
        			<div class="item active">
          				<img src="imagen/im2.jpg" alt="">
          				<div class="carousel-caption">
            			
          				</div>
        			</div>
              <div class="item">
                  <img src="imagen/im3.jpg" alt="">
                  <div class="carousel-caption">
                  
                  </div>
              </div>
              
              <div class="item">
                  <img src="imagen/im4.jpg" alt="">
                  <div class="carousel-caption">
                  
                  </div>
              </div>
              
              
        			
      			</div>

      			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        		<span class="sr-only">Anterior</span>
      			</a>

      			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
       			 <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
       			 <span class="sr-only">Next</span>
      			</a>
    		</div>
  		</div>
 </div>

  		<div class="row">
  			<div class="col-md-12 contenido">
  				<div class="row">
  					<div class="col-md-3">
  						<span>   </span>
  					</div>
  					<div class="col-md-6 columna2">
  						<div class="row">

  							<form action= " " class="form-inline" method="post" id="form">
  							<br>
  							<div class="form-group">                               
                <label><h3>Registro</h3></label>
                <br>
                <label>*Datos Obligatorios</label>
                <br>
                <label for="exampleInputName2">Nombre</label>
    						<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Gustavo">
                <label>*</label>
                <br> 						
  							<label for="exampleInputName2">Usuario</label>
    						<input type="text" name="usuario" class="form-control" id="usuario" placeholder="gguijarro">
                <label>*</label><div id="msgUsuario"></div>  
                <br>
                <label >Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="gguijarro@inmedical.com.ec">
                <label>*</label>               
                <br>
                <label >Contraseña</label>
                <input type="text" name="contrasena" class="form-control" id="contrasena" placeholder="*******">
                <label>*</label>  			
                <br>
                <label >Verificar Contraseña</label>
                <input type="text" name="verificar" class="form-control" id="verificar" placeholder="*******">
                <label>*</label> 							
  							<br>
  							<label >Dirección</label>
    						<input type="text" name="direccion" class="form-control" id="direccion" placeholder="Solanda\Sector3">              
    						<br>
  							<br>
  							<label >Teléfono</label>
    						<input type="text" name="telefono" class="form-control" id="telefono" placeholder="0986292922">
                <label>*</label>
                <br>
                <br>
                <label >Provincia</label>
                <select id="txtprovincia" name="provincia">
                      <option value="">Seleccione...</option>
                             <?php
                                foreach($provincias as $pr){
                                echo '<option value="' . $pr['cod_provincia'] . '">' . $pr['provincia'] . '</option>';
                                }
                              ?>
               </select>
               <br>
                <br>
               <label >Canton</label>
               <select id="txtcanton" name="canton">
                     <option value="">Seleccione...</option>
               </select>                
                <br>
                <label >Parroquia</label>
                <select id="txtparroquia" name="parroquia">
                     <option value="">Seleccione...</option>
                </select>
  							<br>
                <input type="submit" class="btn btn-primary" value="Ingresar" name="ingresar" id="btn">
                </form>
  							<br>
               <?php

            $conn = new mysqli('localhost' , 'root' , '', 'registro');
              $query = 'SELECT * FROM empleado';
              $result = $conn->query($query);
              if(!$result)die($conn->error);
              $num_rows = $result->num_rows;
              echo '<br>';
              echo '<br>';
              echo '<br>';
              echo '<table class="table table-bordered">';
                echo '<tr class="active">';
                  echo '<th><h5><small><strong>Nombre</strong></small></h5></th>';
                  echo '<th><h5><small><strong>Usuario</strong></small></h5></th>';
                  echo '<th><h5><small><strong>Contraseña</strong></small></h5></th>';
                  echo '<th><h5><small><strong>Direcci&oacute;n</strong></small></h5></th>';
                  echo '<th><h5><small><strong>Tel&eacute;fono</strong></small></h5></th>';
                  echo '<th><h5><small><strong>Email</strong></small></h5></th>';
                  echo '<th><h5><small><strong>Provincia</strong></small></h5></th>';
                  echo '<th><h5><small><strong>Canton</strong></small></h5></th>';
                  echo '<th><h5><small><strong>Parroquia</strong></small></h5></th>';
                  echo '</tr>';
                  echo '<tr><td></td></tr>';

                  for ($i=0; $i <$num_rows ; ++$i) { 
                    $result->data_seek($i);
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                  
                echo '<tr class="info">';
                echo '<td><h6><small>'.$row['nombre'].'</small></h6></td>';
                echo '<td><h6><small>'.$row['apellido'].'</small></h6></td>';
                echo '<td><h6><small>'.$row['fechadenacimiento'].'</small></h6></td>';
                echo '<td><h6><small>'.$row['direccion'].'</small></h6></td>';
                echo '<td><h6><small>'.$row['telefono'].'</small></h6></td>';
                echo '<td><h6><small>'.$row['estado_civil'].'</small></h6></td>';
                echo '<td><h6><small>'.$row['provincia'].'</small></h6></td>';
                echo '<td><h6><small>'.$row['canton'].'</small></h6></td>';
                echo '<td><h6><small>'.$row['parroquia'].'</small></h6></td>';
                echo '<td> 
                  <form action ="" method="post" >
                    <button type="button" class="btn btn-primary btn-xs btn-danger" data-toggle="modal" data-target="#myModal">
                  Eliminar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
                      </div>
                      <div class="modal-body">
                        Desea eliminar el registro de la base de datos?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-danger">Si</button>
                      </div>
                    </div>
                  </div>
                </div>

                <input type="hidden" value="' . $row['id'] . '"  name="id">
                </form></td>

                  <td>
                  <form action ="" method="post" >
                  <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal2">
                    Modificar
                  </button>

                  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="myModalLabel2">Modificar Datos</h4>
                        </div>
                        <div class="modal-body">
        
      
                <label for="exampleInputName2">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre"  value="'.$row['nombre'].'">
              
                <label for="exampleInputName2">Usuario</label>
                <input type="text" name="apellido" class="form-control" id="apellido" value="'.$row['apellido'].'">
                
                <br>
                <br>
                <label >Contraseña</label>
                <input type="text" name="fechadenacimiento" class="form-control" id="fechadenacimiento" value="'.$row['fechadenacimiento'].'">
                <br>
                <br>
                <label >Dirección</label>
                <input type="text" name="direccion" class="form-control" id="direccion" value="'.$row['direccion'].'">
                <br>
                <br>
                <label >Teléfono</label>
                <input type="text" name="telefono" class="form-control" id="telefono" value="'.$row['telefono'].'">
                <br>
                <br>
                
                <label ><h5><strong>Provincia </strong> </h5></label> 
                <select class="form-control" name="estado_civil" id="estado_civil" onchange="crear(this.value)">
                    <option value="Pichincha">Soltero</option>
                    <option value="Guayas">Casado</option>
                    <option value="Cuenca">Viudo</option>
                    <option value="Union Libre">Union Libre</option>

                  </select>
                
                <label ><h5><strong>Canton</strong> </h5></label>
                <select class="form-control" name="departamento" id="departamento" onchange="crear(this.value)">
                  <option value="......">Desarrollo</option>
>
                </select>
                      
                <br>
                <br>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar Cambios</button>
                  </div>
                </div>
              </div>
            </td>
            <td>

          <input type="hidden" value="' . $row['id'] . '"  name="id">
          </form></td>';

                echo '</tr>';
              }
                
              echo '</table>';
              $result->close();
              $conn->close();
            ?>

                </div>                
                </form>
  						</div>
  					</div>
  					<div class="col-md-3">  </div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<script src="js/jquery.min.js"></script>
            <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>

        <script src="js/bootstrap.min.js"></script>
        <FOOTER align="center">
          Realizado por : Gustavo Guijarro || 2016
        </FOOTER>
  </body>
</html>