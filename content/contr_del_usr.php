<?php
include ('../controllers/db.php');
include ('../menu.php');

session_start();
$_SESSION["rol"];

if($_SESSION["rol"] == 'u' || !isset($_SESSION['nombre'])){

    header("Location: ../login.php");

  }

if(isset($_GET['id'])) { 
    $ident = $_GET['id'];
}

echo $ident;

if($conexion){
        $sql="DELETE FROM `daw2`.`usuario` WHERE id = '$ident' ";
         $consulta=mysqli_query($conexion,$sql);
}



?>
