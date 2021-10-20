<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'usbw');
define('DB_NAME', 'daw2');
 
$conexion = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$db_nombre = mysqli_connect(DB_SERVER);
$selecion = mysqli_select_db($db_nombre,$sel);



 
if(!$conexion){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(!$selecion){
    die("ERROR: Could not connect. " . mysqli_connect_error());

}


?>