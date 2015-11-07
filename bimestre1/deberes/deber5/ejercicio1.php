  <html>
      <title> Ejercicio1 </title>
   
      <style type="text/css">   

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

  #div1 {
  text-align: center; 
  }

  }
  </style>  
  <div id="formul" > 
    
    <form method="post" name="formulario">
    <br>
    <br>
    <br>
    <br>
    <section>
     <label style="margin-left: 200px">Valor en USD:</label>
     <input type="text" name="dolar" value="">
   
      <label style="margin-left: 250px">Convertir a:</label>
      <select name="moneda">
      <OPTION VALUE="seleccione" selected> Seleccione
       <OPTION VALUE="eur" > Euros
       <OPTION VALUE="pesos" > Pesos Colombianos
      </select>
      </section>
      </br>
      </br>
      </br>
      </br>
           <input class="boton" type="submit" name="boton" value="Convertir" style="margin-left: 550px">

          </br> </br>
  <div id="div2" align="center">___________________________________________________________________</div>
  <br>
  <br>
  <br>
  <div align="center"> Resultado:</div>
  <br>
  <br>
  <br>
  <div id="div1">
     <?php
      error_reporting (0);
      $moneda=$_POST['moneda'];
      $dolar=$_POST['dolar'];
      if(empty($_POST['dolar'])){

        echo "Introduzca una cantidad porfavor!!</br>";
      }
      else{
       if($moneda=='eur'){
        $eur=0.91886;
        $resul=$dolar * $eur;
        echo " $dolar USD equivale a  $resul euros</br>"; 
       }//cierra if dolares
       if($moneda=='pesos'){
        $pesos=2853.28;
        $resul=$dolar * $pesos;
        echo " $dolar USD equivale a  $resul pesos</br>"; 
       }//cierra if pesos
       }//cierra else
     ?>
     <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
   </div>
    </form>
    </div> 
   </body>
  </html>