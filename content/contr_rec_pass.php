<?php

include ('../controllers/db.php');


session_start();

include ('../controllers/funciones/include_funciones.php');
sessiones(1);


  if(isset($_POST['username'])) { 
    $usuario = $_POST['username'];
}

    if(isset($_POST['password'])) { 
    $contra = $_POST['password'];
    }


    $hashed_password = hash('sha256', $contra);


$sql = "SELECT * FROM usuario WHERE EMAIL = '$usuario'";
$consulta = $conexion->query($sql);
$filas = mysqli_num_rows($consulta);

if($filas > 0){
    $recupe="UPDATE`daw2`.`usuario` SET PASSWD = '$hashed_password' WHERE EMAIL = '$usuario'";
    $insetar=mysqli_query($conexion,$recupe);
}else{
    echo "Usuario NO Existe";

    
}


?>