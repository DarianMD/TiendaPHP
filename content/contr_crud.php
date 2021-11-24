<?php
include ('../controllers/db.php');
include ('../menu.php');
include ('../controllers/funciones/include_funciones.php');


session_start();
$_SESSION["rol"];

sessiones(2);

   
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

$tmp_name = $_FILES['img_up']["tmp_name"];
$name = $_FILES['img_up']["name"];


if($conexion){
        $sql="UPDATE `daw2`.`producto` SET nom_product = '$nom', desc_product = '$de', precio = '$pr' WHERE id = '$ident' ";
         $consulta=mysqli_query($conexion,$sql);
         subirImagen(2,$tmp_name,$name,$ident,$conexion);
}



?>
