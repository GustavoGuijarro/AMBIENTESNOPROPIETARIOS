<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
//<!--jQuery innerWidth () y innerHeight () Métodos-->
$(document).ready(function(){
    $("button").click(function(){
        var txt = "";
        txt += "Ancho del div: " + $("#div1").width() + "</br>";
        txt += "Altura del div: " + $("#div1").height() + "</br>";
        txt += "Anchura interior de la div: " + $("#div1").innerWidth() + "</br>";
        txt += "Altura interior de div: " + $("#div1").innerHeight()+ "</br>";
        txt += "Anchura exterior de div: " + $("#div1").outerWidth() + "</br>";
        txt += "Altura exterior de div: " + $("#div1").outerHeight();
        $("#div1").html(txt);
    });
});

</script>
</head>
<style>
#div1 {
    height: 100px;
    width: 300px;
    padding: 10px;
    margin: 3px;
    border: 1px solid blue;
    background-color: lightblue;
}
</style>
<body>
<br>

<h1>Consulta de funcionalidades .innerWidth(), .outerWidth(), .innerHeight() y .outerHeight(). con ejemplo</h1>
<img src="imagen.jpg" width="400" height="400" align="center">
<p><b>innerWidth() -</b> Devuelve el ancho de un elemento ( incluye relleno).</p>
<p><b>innerHeight()-</b> Devuelve la altura de un elemento (incluye relleno)</p>
<p><b>outerWidth()-</b>Devuelve el ancho de un elemento ( incluye el relleno y la frontera ).</p>
<p><b>outerHeight()-</b> Devuelve la altura de un elemento ( incluye el relleno y la frontera.</p>
<br>
<br>
<button>EJECUTAR LAS PROPIEDADES</button>

<div id="div1"></div>
<br>


</body>
</html>
