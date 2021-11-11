<?php
include ('../controllers/db.php');
include ('../menu.php');
   

if(isset($_GET['id'])) { 
    $id = $_GET['id'];
}

echo $id;

if($conexion){
        $sql="DELETE FROM `daw2`.`producto` WHERE id = '$id' ";
         $consulta=mysqli_query($conexion,$sql);
}



?>
