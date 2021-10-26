<?php

/*
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'usbw');
define('DB_NAME', 'daw2');*/
 
$conexion = mysqli_connect('localhost', 'root', 'usbw', 'daw2');

 
if(!$conexion){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}




?>