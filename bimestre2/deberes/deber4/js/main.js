$(document).ready(function(){
	

	$("#btn").on("click", function(ev)
	{

		$("#form").validate({
			rules: {
				nombre: {
					required: true,
					minlength: 2,
				},
				email: {
					required: true,
					email: true
				}, 
				usuario: {
					required: true,
					remote: "comprobar.php"
				},	
				contrasena: {
					required: true
				},
				verificar: {
					required: true,
					equalTo: "#contrasena"
				},
				
				telefono: {
					required: true
				}
			},
			messages: {
				nombre:{
					required: "Campo obligatorio",
					minlength: "El nombre debe contener 2 caracteres"
				},
				email:{
					required: "Campo obligatorio",
					email: "Introdusca un correo valido"
				},
				usuario:{
					required: "Campo obligartorio",
					remote: "El usuario ya existe"
				},
				verificar:{
					required: "Campo obligatorio",
					equalTo: "La contraseña ingresada no coincide. Vueva a intentarlo"

				},
				telefono:{
					required: "Campo obligatorio"
				},
				contrasena:{
					required: "Campo obligatorio"
				}
			}
		});

		//realizar la peticion de la llamada ajax
		//done envia los mensajes que se encuentran en el rpc.php
		//#mensaje div colocado en el index
		//prevent evita el comportamiento por defecto del boton
		ev.preventDefault();
		if($("#form").valid()){

		$.ajax({

			type: 'post',
			url: 'insertar.php',
			data: {
				nombre: $("#nombre").val(),
				email: $("#email").val(), 
				usuario:  $("#usuario").val(),
				contrasena: $("#contrasena").val(),
				verificar: $("#verificar").val(),
				telefono: $("#telefono").val()
			}
		})
		.done(function( msg ){
			$("#mensaje2").html(msg);
		})
		.fail(function(jHttp, textStatus, errorThrown){
			$("#mensaje2").html("Error: " + textStatus + ". " + errorThrown);
		})
		.always(function(){
			$("#form")[0].reset();

			$("#guardar").html("Datos Guardados");

		});
	}
});


});




