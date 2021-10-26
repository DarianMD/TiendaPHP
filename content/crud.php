<?php

include ('../controllers/db.php');


$titulo = $_POST['title'];
$descripcion = $_POST['desc'];
$precio = $_POST['precio'];
mysqli_set_charset($conexion,"utf8");

if($conexion){
        $sql="INSERT INTO `producto` (`id`,`nom_product`, `desc_product` , `precio`) VALUES (null,'$titulo', '$descripcion' '$precio')";
        $consulta=mysqli_query($conexion,$sql);
        //header("Location:panel-admin.php");    
    

}




?>