<?php
include ('../controllers/db.php');
include ('../menu.php');

session_start();
$_SESSION["rol"];

if($_SESSION["rol"] == 'u' || !isset($_SESSION['nombre'])){

    header("Location: ../login.php");

  }
   
if(isset($_POST['nombre'])) { 
    $nom = $_POST['nombre'];
}

if(isset($_POST['nombre'])) { 
    $nom = $_POST['nombre'];
}

if(isset($_POST['nombre'])) { 
    $nom = $_POST['nombre'];
}

if(isset($_POST['nombre'])) { 
    $nom = $_POST['nombre'];
}

if(isset($_POST['descripcion'])) { 
    $de = $_POST['descripcion'];
}

if(isset($_POST['precio'])) { 
    $pr = $_POST['precio'];
}

if(isset($_POST['id'])) { 
    $ident = $_POST['id'];
}

if($conexion){
        $sql="UPDATE `daw2`.`producto` SET nom_product = '$nom', desc_product = '$de', precio = '$pr' WHERE id = '$ident' ";
         $consulta=mysqli_query($conexion,$sql);
}



?>
