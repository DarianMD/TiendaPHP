<?php
include('db.php');

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['correo']=$correo;

mysqli_set_charset($conexion,"utf8");

if($conexion){
    $sql="INSERT INTO `daw2`.`usuario` (`correo`, `contraseña`) VALUES ('$correo', '$contraseña')";
    $consulta=mysqli_query($conexion,$sql);
    
    echo "Registro realizado correctamente";

    include("login.html");
 

}