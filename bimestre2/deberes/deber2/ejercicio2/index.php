<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("p").removeClass("intro");
        });
});
</script>

<style>
.intro {
    font-size: 150%;
    color: green;
}


</script>
<style>
.intro {
    font-size: 120%;
    color: red;
}
</style>
</head>
<body>

<h1>Este ejercicio demuestra las caracteristicas de las funciones .addClass y .removeClass</h1>

<p class="intro">GNU/Linux es uno de los términos empleados para referirse a la combinación del núcleo o kernel libre similar a Unix denominado Linux con el sistema operativo GNU. Su desarrollo es uno de los ejemplos más prominentes de software libre; todo su código fuente puede ser utilizado, modificado y redistribuido libremente por cualquiera bajo los términos de la GPL (Licencia Pública General de GNU, en inglés: General Public License) y otra serie de licencias libres.1</p>
<p class="intro">A pesar de que "Linux" se denomina en la jerga cotidiana al sistema operativo,2 3 este es en realidad sólo el Kernel (núcleo) del sistema. La verdadera denominación del sistema operativo es "GNU/Linux" debido a que el resto del sistema (la parte fundamental de la interacción entre el hardware y el usuario) se maneja con las herramientas del proyecto GNU (www.gnu.org) y con entornos de escritorio (como GNOME), que también forma parte del proyecto GNU aunque tuvo un origen independiente. Como el Proyecto GNU destaca,4 GNU es una distribución, usándose el término sistema operativo en el sentido empleado en el ecosistema Unix, lo que en cualquier caso significa que Linux es solo una pieza más dentro de GNU/Linux. Sin embargo, una parte significativa de la comunidad, así como muchos medios generales y especializados, prefieren utilizar el término Linux para referirse a la unión de ambos proyectos. Para más información consulte la sección "Denominación GNU/Linux" o el artículo "Controversia por la denominación GNU/Linux".</p>

<button>Quitar propiedades</button>

</body>
</html>

