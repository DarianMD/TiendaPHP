<?php
include ('../controllers/db.php');
include ('../menu.php');
   

if(isset($_GET['id'])) { 
    $ident = $_GET['id'];
}

echo $ident;

if($conexion){
        $sql="DELETE FROM `daw2`.`usuario` WHERE id = '$ident' ";
         $consulta=mysqli_query($conexion,$sql);
}



?>
