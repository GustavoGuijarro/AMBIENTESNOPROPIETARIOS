<?php

//$conn = new mysqli($host, $usuario,$contrasenia,$bdd);

//if($conn->connect_error)
	//die ($conn->connect_error);
require('inc/config.php');
  
  
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

  							<form action= "insertar.php" class="form-inline" method="post" id="form">
  							<br>
  							<div class="form-group">
                
                
                <label><h3>Registro</h3></label>
                <br>
                <br>
                <label>*Datos Obligatorios</label>
                <br>
                


  							<label for="exampleInputName2">Nombre</label>
    						<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Gustavo">
                <label>*</label>
                <br>
                <br>
  						
  							<label for="exampleInputName2">Usuario</label>
    						<input type="text" name="usuario" class="form-control" id="usuario" placeholder="gguijarro">
                <label>*</label><div id="msgUsuario"></div>
  							
  							<br>
                <br>
                <label >Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="gguijarro@inmedical.com.ec">
                <label>*</label>
                <br>
                <br>
                <label >Contraseña</label>
                <input type="text" name="contrasena" class="form-control" id="contrasena" placeholder="*******">
                <label>*</label>
  							<br>
                <br>
                <label >Verificar Contraseña</label>
                <input type="text" name="verificar" class="form-control" id="verificar" placeholder="*******">
                <label>*</label>
                <br>
  							
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
                
                <br>
  							<br>
                <input type="submit" class="btn btn-primary" value="Ingresar" name="ingresar" id="btn">
                </form>
  							<br>
                </form>

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