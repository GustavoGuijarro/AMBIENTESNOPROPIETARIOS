<?php require('p_registro.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
<form action="#" method="post">
  <?php if(isset($error) && $error != '' ): ?>
    <div><?php echo $error;?></div>
  <?php endif; ?>
  <div>
    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre" value="">
  </div>

  <div>
    <label for="apellidos">Apellidos</label>
    <input type="text" id="apellidos" name="apellidos" value="">
  </div>  

  <div>
    <div><label>Género</label></div>
    <label for="genero_m">Masculino </label>
    <input type="radio" id="genero_m" name="genero" value="m">
    <label for="genero_f">Femenino </label>
    <input type="radio" id="genero_f" name="genero" value="f" checked="ckecked">
  </div>

  <div>
    <label for="edad">Edad</label>
    <select id="edad" name="edad">
      <option value="">Menos de 20 años</option>
      <option value="1">Entre 20 y 39 años</option>
       <option value="1">Entre 40 y 59 años</option>
        <option value="1">Mas de 60</option>
    </select>
  </div>    
   

  <div>
    <button id="enviar" name="enviar">Enviar</button>
  </div>

</form>
</body>
</html>