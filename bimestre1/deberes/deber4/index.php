<?php
include('p_index.php');
?>
 
<html>
   <head>
    <title>Crear una sesión en PHP</title>
    <style type="text/css">
        </style>
    <link href="css/StyleSheet.css" rel="stylesheet" type="text/css" />
   </head>
   <body>

   <div class="style1">
   <div class="style3">
     <h1>Creación de una sesión</h1>
     <?php
     if(isset($error_login)): 

     ?>
   <span style="color: #f00;"> El usuario o la contraseña son incorrectos. </span>
    <?php endif; ?>
    <form method="post" action="index.php">

    
     <form action="./index.php" method="POST">
       <p>
         <label>Nombre de usuario:</label>
         <input type="text" name="username" />
       </p>
       <p>
         <label>Contraseña:</label>
         <input type="password" name="contrasena" />
       </p>
       <p>
        <input type="submit" value="Crear sesión" />
       </p>
       
     </form>

      </div>
     </div>

   </body>
</html>