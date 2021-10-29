<?php

include ('db.php');





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

if(isset($_POST['img'])) { 
    $image = $_POST['img'];
}


$id = '';
$id = $id.randw();


function randw($length=6){
    return substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"),0,$length);
}


/*$input = file_get_contents($image);
$output = '../styles/assets/images/'.$id.'.jpg';
file_put_contents($output, $input);*/



mysqli_set_charset($conexion,"utf8");


$producto="SELECT * from usuario";
$result = $conexion->query($producto);

    if($row['id'] = $id){
        $id = $id.randw();
    }



$usuar_sel="select * from usuario where user=".$user;
$result = $conexion->query($usuar_sel);
if (mysql_num_rows($result)> 0){
        echo "El usuario ya existe";
    }
else{
    if($conexion){

        $sql="INSERT INTO `daw2`.`usuario` VALUES ('$id','$user', '$passwd', '$email', sysdate(), sysdate(),'$id',null)";
         $consulta=mysqli_query($conexion,$sql);
         
         echo "Registro realizado correctamente"; 
     
      
     
     }   
}







?>