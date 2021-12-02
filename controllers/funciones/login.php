<?php

function lastLog($id){
    include ('../controllers/db.php');

    $last_log="UPDATE usuario SET LAST_LOGIN = CURRENT_TIMESTAMP WHERE ID = '$id' ";
    $last_logi=mysqli_query($conexion,$last_log);
}



function login($username, $password){

    include ('../controllers/db.php');

    $password = hashPass($password);


    $resu = mysqli_query($conexion, "SELECT * FROM usuario WHERE EMAIL = '$username' AND PASSWD = '$password'");
    $row = mysqli_fetch_assoc($resu);
    $rol = $row['rol'];
    $nombre = $row['USER'];
    $idens = $row['ID'];
    $imagen_perf = $row['IMAGEN'];

    sessionUser($rol,$nombre,$idens,$imagen_perf);
    userExist($username,$password);


}


function sessionUser($rol,$nombre,$idens,$imagen_perf){
    $_SESSION["rol"] = $rol;
    $_SESSION["nombre"] = $nombre;
    $_SESSION["id"] = $idens;
    $_SESSION["imagen"] = $imagen_perf;

  
};


function userExist($username,$password){
    include ('../controllers/db.php');

    $resu = mysqli_query($conexion, "SELECT * FROM usuario WHERE EMAIL = '$username' AND PASSWD = '$password'");
    $filas = mysqli_num_rows($resu);

    if($filas == 0){
        session_destroy();
        //header("Location: /login.php");
        //echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";


        echo "<SCRIPT> //not showing me this
        alert('Error: usuario y/o clave incorrectos!!')
        window.location.replace('/login.php');
    </SCRIPT>";

    }else{
 
        loginRol();
    }

}


function loginRol(){
    
    $idens = $_SESSION["id"];
    lastLog($idens);

    if($_SESSION["rol"] == "a"){
        header("Location: ../content/panel-admin.php");
    }
    if($_SESSION["rol"] == "u"){
        header("Location: ../index.php");
    }
}

?>