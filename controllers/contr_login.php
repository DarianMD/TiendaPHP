<?php

 include ('db.php');

 session_start();



 if(isset($_POST['username'])) { 
    $username = $_POST['username'];
}

if(isset($_POST['password'])) { 
    $password = $_POST['password'];
}

$sql = "SELECT * FROM usuario WHERE EMAIL = '$username' AND PASSWD = '$password'";
$consulta = $conexion->query($sql);

$resu = mysqli_query($conexion, "SELECT * FROM usuario WHERE EMAIL = '$username' AND PASSWD = '$password'");
$row = mysqli_fetch_assoc($resu);
$rol = $row['rol'];

$_SESSION["rol"] = $rol;

if(!$consulta = $conexion->query($sql)){
    echo "ERROR: no se pudo ejecutar la consulta!";}
    else{
        $filas = mysqli_num_rows($consulta);

        if($filas == 0){
            echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
        }else{
            if($rol == "a"){
                echo $_SESSION["rol"];
                echo "Admin";

            }
            else{
                echo $_SESSION["rol"];
                echo "Usuario";
            }
        }

    }


?>