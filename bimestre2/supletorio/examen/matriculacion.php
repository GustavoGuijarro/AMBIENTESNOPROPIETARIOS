<?php
$conn = new mysqli('localhost' , 'root' , '', 'supletorio');
if ($conn->connect_error) die($conn ->connect_error);
//Inicio de Sesion

//iniciar sesion 
//print_r($_SESSION);


$query = "SELECT * FROM nivel";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$niveles = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $niveles[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Matriculacion</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head>
<body>

<div class="container">

<div>
	

</div>

	<div class="row">
		<div class="col-md-2">
			<div class="row" id="divNivel">
			
			
				
				<div class="col-md-2">
						<label for="nivel">Nivel</label>
					<select id="nivel" name="nivel">
						<option>Seleccione</option>
						<?php
						 foreach($niveles as $nivel){
    						echo '<option value="' . $nivel['id_nivel'] . '">' . $nivel['nombre'] . '</option>';
  						}
						?>
					</select>
				</div>
				</div>
				</div>
			<div class="col-md-6">

			      
				       <label id="area" for="nivel">Materias asignadas</label> 
                      <textarea id="materias_registradas" name="comentarios" rows="30" cols="60"><?php echo "string";  ?> </textarea>
  
                      

                     </input>
			</div>
			<div class="col-md-4">
				    <div class="row" id="titMaterias">
				    	<div classregisMaterias
							<label for="materias">Lista de Materias Disponibles</label>
						</div>
					</div>
					<div class="row" id="lstMaterias">
						<div class="col-md-4">
						
                         
						</div>
					</div>
			</div>
		</div>
</div>
	</div>
	<div class="row" id="divBoton">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<button id="btnRegistrarMaterias" class="btn btn-primary">REGISTRAR MATERIAS</button>
		</div>
		<div class="col-md-4">
		</div>
	</div>
	<div class="row" id="regMaterias">
		<div class="col-md-4">
		<div class="row" id="mensaje" >
        
		</div>
		</div>
		<div class="col-md-4">
		<a href="./rpc/cerrar_sesion.php"><button id="nuevo-producto" class="btn btn-primary">CERRAR SESION</button></a>
		</div>
	</div>
</div>








	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript" src="js/additional-methods.js"></script>
	<script type="text/javascript" src="js/main.js"></script>


</body>
</html>