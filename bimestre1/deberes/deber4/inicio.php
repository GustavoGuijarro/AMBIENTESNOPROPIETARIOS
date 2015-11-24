
<html>
  <head>
    <title>Hemos iniciado sesión</title>
    <style type="text/css">
        </style>
    <link href="css/StyleSheet.css" rel="stylesheet" type="text/css" />
  </head>

  <body>  
    <div class="style3" >
    <div class="style1"> 
        <span >Nombre:&nbsp; Gustavo Guijarro </span>
        <br />
                <span ><br />
        <br />
        &nbsp;&nbsp;&nbsp; REGISTRO<br />
        <section>
        <p>
          <a href="./php/cerrar_sesion.php">Cerrar sesión</a>
        </p>
        
        </section> 
        <section>
        <p>Bienvenido <?=$_SESSION['username'];?> Por Favor Ingresa Tus Datos</p>
      </section>
    </div>
    </div>


    <div class="style4" style="height: 637px; background-color: #87CEFA">
    <span >
    </br>
    <form name="formulario" method="post" action="info.php">
    <label>Nombre:</label></span>
    <input type="text" name="name" value ="" style="margin-left: 155px" />
    <br />
    <br />
    <span><label>Apellidos:</label></span>
    <input type="text" name="apellido" value ="" style="margin-left: 145px" />
    <br />
    <br />
    <span ><label>Genero:</label></span>
    <select name="genero">
    <option style="margin-left: 145px" value="Masculino">Masculino</option>
    <option style="margin-left: 145px" value="Femenino">Femenino</option>
    </select>
        <br  />
    <span ><label>Correo Electrónico:</label></span>
    <input type="text" name="email" value ="" style="margin-left: 75px" />
        <br />
        <br />
        <span ><label>Fecha de Nacimento:</label></span>
    <input type="text" name="date" value ="" style="margin-left: 65px" />
        <br />
        <br  />
        <br  />
        
    <br /> 
    <input type="submit" />
</form>
</div>
</body>
</html>
