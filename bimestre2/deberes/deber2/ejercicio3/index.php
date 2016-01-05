<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
 

	$(document).ready(function(){
		$("#mostrar").on( "click", function() {
			$('p,h1,ul').show(); //muestro mediante id
	
		 });

		$("#ocultar").on( "click", function() {
			$('p,h1,ul').hide(); //oculto mediante id

		});
		$("#parrafo").on( "click", function() {
			$('p').hide(); //muestro mediante id
	
		 });
		$("#lista").on( "click", function() {
			$('#primero').hide(); //muestro mediante id
	
		 });

		$( "td" ).hover(
               function() {
             $( this ).addClass( "hover" );
              }, function() {
               $( this ).removeClass( "hover" );
              }
);  
		
	});

</script>

<style>
.intro {
    font-size: 150%;
    color: blue;
}


</script>
<style>
.intro {
    font-size: 120%;
    color: blue;
}
.intro1 {
    font-size: 120%;
    color: red;
}
</style>
</head>
<body>
<div>

<h1>Este ejercicio demuestra las caracteristicas de las funciones .addClass y .removeClass</h1>

<p class="intro">GNU/Linux es uno de los términos empleados para referirse a la combinación del núcleo o kernel libre similar a Unix denominado Linux con el sistema operativo GNU. Su desarrollo es uno de los ejemplos más prominentes de software libre; todo su código fuente puede ser utilizado, modificado y redistribuido libremente por cualquiera bajo los términos de la GPL (Licencia Pública General de GNU, en inglés: General Public License) y otra serie de licencias libres.1</p>
<p class="intro">A pesar de que "Linux" se denomina en la jerga cotidiana al sistema operativo,2 3 este es en realidad sólo el Kernel (núcleo) del sistema. La verdadera denominación del sistema operativo es "GNU/Linux" debido a que el resto del sistema (la parte fundamental de la interacción entre el hardware y el usuario) se maneja con las herramientas del proyecto GNU (www.gnu.org) y con entornos de escritorio (como GNOME), que también forma parte del proyecto GNU aunque tuvo un origen independiente. Como el Proyecto GNU destaca,4 GNU es una distribución, usándose el término sistema operativo en el sentido empleado en el ecosistema Unix, lo que en cualquier caso significa que Linux es solo una pieza más dentro de GNU/Linux. Sin embargo, una parte significativa de la comunidad, así como muchos medios generales y especializados, prefieren utilizar el término Linux para referirse a la unión de ambos proyectos. Para más información consulte la sección "Denominación GNU/Linux" o el artículo "Controversia por la denominación GNU/Linux".</p>
</div>

<div>
<ul class="intro">
<li id="primero">Tortilla</li >
<li >Jamon</li >
<li >Queso</li >
</ul >
</div>
<div>
<ul class="intro" >
<li >Coca Cola</li >
<li >Leche</li >
<li >Te</li >
</ul >
</div>
<div>

<table border="1" cellspacing="0">
<?php
$numero=1;
for ($numero1=0; $numero1 <=10 ; $numero1++) { 
	echo "<tr>";
	for ($numero2=0; $numero2 <=10 ; $numero2++) { 
		echo "<td>".$numero. "</td>";
		$numero++;
		}
			echo "</tr>";
	# code...
}
?>

</table>

	

</div>

<input type="button" id="mostrar" name="boton1" value="Click para mostrar elementos">
<input type="button" id="ocultar" name="boton2" value="Click pora ocultar elementos">
<input type="button" id="parrafo" name="boton3" value="Click pora ocultar Parrafos">
<input type="button" id="lista" name="boton4" value="Click para quitar primer elemento lista">

</body>
</html>

