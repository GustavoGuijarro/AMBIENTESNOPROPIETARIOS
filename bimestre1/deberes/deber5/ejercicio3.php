<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio2</title>
	<style type="text/css" >

  #formul {  
      padding: 20px 0px 0px 30px;   /* margen con valores: arriba - derecha - abajo - izquierda */ 
      font-family:verdana,arial; 
      font-size:9pt; 
      border: 1px dotted black;
  }  

  .boton{ 
      font-size:12px; 
      font-family:Verdana,Helvetica; 
      font-weight:bold; 
      color:#0000FF; 
      background:#A4C1FF; 
      border:0px; 
      width:120px; 
      height:25px; 
  } 

  body {

  background-color: #D8D8D8;
  border: 100px;

  }




</style>
</head>
<body>
<?php
error_reporting (0);
?>

<form method="post" name="formulario">
	
	    PROVINCIA: 
	    <select>
           <option>Seleccione:</option>
           </select>
        CANTON: 
             <select>
           <option>Seleccione:</option>
           </select>
       PARROQUIA: 
             <select>
           <option>Seleccione:</option>
           </select>
 
        <input type="submit" name="ENVIAR" ">
        
   

</form>
</body>
</html>