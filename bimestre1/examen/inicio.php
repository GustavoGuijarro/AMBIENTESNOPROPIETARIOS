
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
            &nbsp;&nbsp;&nbsp; Usuario Ingresado<br />
            <section>
            <p>
              <a href="./php/cerrar_sesion.php">Cerrar sesión</a>
            </p>
            </section> 
            <section>
            <p>Bienvenido <?=$_SESSION['username'];?></p>
          </section>
        </div>
        </div>
    </form>
    </div>
    </body>
    </html>
