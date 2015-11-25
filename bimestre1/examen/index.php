<?php
include('p_index.php');
?>
 
<html>
   <head>
    <title>Creacion sesion</title>
    <meta charset="utf-8">
    <style type="text/css">
        </style>
    <link href="css/StyleSheet.css" rel="stylesheet" type="text/css" />

   </head>
   <body>

   <div >
   <div >
     <h1>Inicio de sesion</h1>
     <?php
     if(isset($error_login)): 

     ?>
   <span style="color: #f00;"> El usuario o la contrasenia son incorrectos. </span>
    <?php endif; ?>
    <form method="post" >

    
     <form action="./index.php" method="POST">
       <p>
         <label>Nombre de usuario:</label>
         <input type="text" name="username" />
       </p>
       <p>
         <label>Contraseña:</label>
         <input type="password" name="contrasena" />
       </p>
       <div>
       
        <input type="submit" value="Iniciar sesion" action="index.php" />
          <p><a href="registro.php">Registrarse</a></p>
      
       </div>

       
       
     </form>

      </div>
     </div>

   </body>
</html>