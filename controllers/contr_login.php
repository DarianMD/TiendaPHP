<?php

 include ('db.php');

 session_start();



 if(isset($_POST['username'])) { 
    $username = $_POST['username'];
}

if(isset($_POST['password'])) { 
    $password = $_POST['password'];
}



$hashed_password = hash('sha256', $password);



$sql = "SELECT * FROM usuario WHERE EMAIL = '$username' AND PASSWD = '$hashed_password'";
$consulta = $conexion->query($sql);

$resu = mysqli_query($conexion, "SELECT * FROM usuario WHERE EMAIL = '$username' AND PASSWD = '$hashed_password'");
$row = mysqli_fetch_assoc($resu);
$rol = $row['rol'];
$nombre = $row['USER'];
$idens = $row['ID'];
$imagen_perf = $row['IMAGE'];

$_SESSION["rol"] = $rol;
$_SESSION["nombre"] = $nombre;
$_SESSION["id"] = $idens;
$_SESSION["image"] = $imagen_perf;


$last_log="UPDATE usuario SET LAST_LOGIN = CURRENT_TIMESTAMP WHERE ID = '$idens' ";

if(!$consulta = $conexion->query($sql)){
    echo "ERROR: no se pudo ejecutar la consulta!";}
    else{
        $filas = mysqli_num_rows($consulta);


        if($filas == 0){
            echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
        }else{
            $last_logi=mysqli_query($conexion,$last_log);

            if($rol == "a"){
                header("Location: ../content/panel-admin.php");
            }
            else{
                header("Location: ../index.php");
            }
        }

    }


?>