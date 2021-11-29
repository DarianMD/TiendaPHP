<?php

include ('db.php');
include ('./funciones/include_funciones.php');





if(isset($_POST['username'])) { 
    $user = $_POST['username'];
}

if(isset($_POST['password'])) { 
    $passwd = $_POST['password'];

}

if(isset($_POST['email'])) { 
    $email = $_POST['email'];
    $email = strtolower($email);
}

if(isset($_POST['permiso'])) { 
    $permi = $_POST['permiso'];
    $permi = strtolower($permi);
}


if(isset($_POST['img'])) { 
    $image = $_POST['img'];
}



$tmp_name = $_FILES['img_up']["tmp_name"];
    $name = $_FILES['img_up']["name"];


$hashed_password = hash('sha256', $passwd);



mysqli_set_charset($conexion,"utf8");


$producto="SELECT * from usuario";
$result = $conexion->query($producto);

$id = randw(6);



$usuar_sel="select * from usuario where user=".$user;
$result = $conexion->query($usuar_sel);

    if($conexion){

        $sql="INSERT INTO `daw2`.`usuario` VALUES ('$id','$user', '$hashed_password', '$email', sysdate(), sysdate(),'$id',null,'$permi',0)";
         $consulta=mysqli_query($conexion,$sql);

         subirImagen(1,$tmp_name,$name,$id,$conexion);

         
         echo "Registro realizado correctamente"; 
     
      
     
     }   








?>