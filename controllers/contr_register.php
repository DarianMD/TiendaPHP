<?php

include ('db.php');

$id = '';
$id = $id.randw();


function randw($length=6){
    return substr(str_shuffle("qwertyuiopasdfghjklzxcvbnm"),0,$length);
}



if(isset($_POST['username'])) { 
    $user = $_POST['username'];
}

if(isset($_POST['password'])) { 
    $passwd = $_POST['password'];
    $

}

if(isset($_POST['email'])) { 
    $email = $_POST['email'];
    $email = strtolower($email);
}

if(isset($_POST['img'])) { 
    $image = $_POST['img'];
}

/*$input = file_get_contents($image);
$output = '../styles/assets/images/'.$id.'.jpg';
file_put_contents($output, $input);*/



mysqli_set_charset($conexion,"utf8");


$producto="SELECT * from producto";
$result = $conexion->query($producto);


while($row = $result->fetch_assoc()){
    if($row['id'] = $id){
        $id = $id.randw();
    }
}



if($conexion){


    echo $user;
    echo $passwd;
    echo $email;


   $sql="INSERT INTO `daw2`.`usuario` VALUES ('$id','$user', '$passwd', '$email', sysdate(), sysdate(),'$id',null)";
    $consulta=mysqli_query($conexion,$sql);
    
    echo "Registro realizado correctamente"; 

 

}





?>