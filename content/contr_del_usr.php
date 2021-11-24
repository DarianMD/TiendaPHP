<?php
include ('../controllers/db.php');
include ('../menu.php');
include ('../controllers/funciones/include_funciones.php');


session_start();
sessiones(2);


if(isset($_GET['id'])) { 
    $ident = $_GET['id'];
}

echo $ident;

if($conexion){
        $sql="DELETE FROM `daw2`.`usuario` WHERE id = '$ident' ";
         $consulta=mysqli_query($conexion,$sql);
}



?>
