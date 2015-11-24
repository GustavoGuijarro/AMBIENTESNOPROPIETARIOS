<?php

/**
 * Verificar si existe una sesión iniciada, si la sesión ya ha sido iniciada
 * ingresar directamente al inicio
 *
 * isset( var ) Determina si una variable está definida y no es NULL.
 *              Devuelve TRUE si var existe y tiene un valor distinto de NULL, 
 *              FALSE de lo contrario.
 *              http://php.net/manual/es/function.isset.php
 *
 * $_SESSION  variable súper global que contiene las variables de sesión.
 *
 * header ( string ) Enviar encabezado sin formato HTTP.
 *                   Debe ser llamado antes de mostrar algo por pantalla.
 *                   http://php.net/manual/es/function.header.php
 */
 $usuarios = array(
    array('nombre' => 'gustavo', 'contrasena' => '123'),
    array('nombre' => 'manuel', 'contrasena' => '1234'),
    array('nombre' => 'pedro', 'contrasena' => '234'),

 );

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['username'];
    $contrasena = $_POST['contrasena'];
    //Creamos una variable para verificar si el usuario con ese nombre y contraseña existe.
    $usuario_encontrado = false;
    foreach($usuarios as $item){
       //Si encuentra al usuario con ese nombre y contraseña sete la variable $usuario_encontrado a true y rompe el bucle para no seguir buscando.
       if($nombre == $item['nombre'] and $contrasena == $item['contrasena']){
          $usuario_encontrado = true;
          break;
       }
    }
if($usuario_encontrado){
//       if( isset( $_SESSION['username'] ) ){
//   http_redirect( 'inicio.php' );
// }

// *
//  * Si no existe una sesión ya iniciada entonces verificar si se ha enviado
//  * datos para un inicio de sesión mediante POST, si este es el caso entonces
//  * crear la variable de sesión para el usuario e ingresar al inicio
 

  $_SESSION['username'] = $_POST['username'];
  http_redirect( 'inicio.php' );

    }else{
       $error_login = true;
    }
 }



