<?php

include ('../controllers/db.php');
include ('../menu.php');
include ('../controllers/funciones/include_funciones.php');


session_start();
sessiones(2);

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

$tmp_name = $_FILES['img_up']["tmp_name"];
$name = $_FILES['img_up']["name"];




if($conexion){

    $ese="UPDATE `daw2`.`usuario` SET USER = '$nombre', PASSWD = '$contra', email = '$email', rol = '$rol' WHERE ID = '$id' ";
    $consulta=mysqli_query($conexion,$ese);
    subirImagen(1,$tmp_name,$name,$id,$conexion);

}


?>
