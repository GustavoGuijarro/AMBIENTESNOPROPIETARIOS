<?php
include('php/p_info.php');
?>

<html>
<head></head>
	<body>
   <style type="text/css">
        </style>
    <link href="css/StyleSheet.css" rel="stylesheet" type="text/css" />    
    <form id="form1" runat="server">   
    <div class="style3">
      
        <span class="style1"><br />
        <br /> REGISTRO<br />
        <section>
        <p>
          <a href="./php/cerrar_sesion.php">Cerrar sesión</a>
          <p>

          <a href="inicio.php">Volver atras</a> 
          
        </p>
        </p>
      </section>    
      <?php
      mostrar_datos();
      ?>
    </div>
    </div>
	</body>
</html>
