<?php

include ('../controllers/db.php');
include ('../menu.php');

session_start();
$_SESSION["rol"];

if($_SESSION["rol"] == 'u' || !isset($_SESSION['nombre'])){

    header("Location: ../login.php");

  }

if(isset($_POST['id'])) { 
    $id = $_POST['id'];
}

if(isset($_POST['contra'])) { 
    $nombre = $_POST['nombre'];
}

if(isset($_POST['contra'])) { 
    $contra = $_POST['contra'];
}

if(isset($_POST['email'])) { 
    $email = $_POST['email'];
}

if(isset($_POST['rol'])) { 
    $rol = $_POST['rol'];
}




if($conexion){

    $ese="UPDATE `daw2`.`usuario` SET USER = '$nombre', PASSWD = '$contra', email = '$email', rol = '$rol' WHERE ID = '$id' ";
    $consulta=mysqli_query($conexion,$ese);
}


?>
