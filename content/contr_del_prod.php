<?php
include ('../controllers/db.php');
include ('../menu.php');

session_start();
$_SESSION["rol"];

if($_SESSION["rol"] == 'u' || !isset($_SESSION['nombre'])){

    header("Location: ../login.php");

  }

if(isset($_GET['id'])) { 
    $id = $_GET['id'];
}

echo $id;

if($conexion){
        $sql="DELETE FROM `daw2`.`producto` WHERE id = '$id' ";
         $consulta=mysqli_query($conexion,$sql);
}



?>
